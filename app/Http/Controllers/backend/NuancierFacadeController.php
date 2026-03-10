<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Document;
use App\Models\NuancierFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NuancierFacadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.resources.nuancier-facade.index', [
            'nuanciers' => NuancierFacade::all(),
            'title' => 'Liste de Nuanciers Façades',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.resources.nuancier-facade.form', [
            'nuancier' => new NuancierFacade(),
            'categories' => Category::all(),
            'title' => "Création d'un Nuancier Façade",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $validators = Validator::make($request->all(), [
            'title' => 'required|max:255|unique:nuancier_facades,title',
            'category_id' => 'required|exists:categories,id',
            'content' => 'nullable|string',
            'document' => 'required|image|mimes:jpeg,png,jpg,gif,webp,bmp|max:1024',
        ]);

        if ($validators->fails()) {
            return redirect()->back()->withErrors($validators)->withInput();
        }

        $nuancier = NuancierFacade::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title'), '-'),
            'category_id' => $request->input('category_id'),
            'content' => $request->input('content', null),
        ]);

        if ($nuancier) {

            if ($request->hasFile('document')) {
                $files = $request->file('document');
                $this->saveDocument($files, $nuancier, 'image');
            }

            return redirect()->route('nuancierFacade.index')->with('success', 'Suppression définitive réussie');
        }

        return redirect()->back()->with('error', 'Échec de la suppression définitive');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NuancierFacade  $nuancierFacade
     * @return \Illuminate\Http\Response
     */
    public function edit(NuancierFacade $nuancierFacade)
    {
        return view('backend.resources.nuancier-facade.form', [
            'nuancier' => $nuancierFacade,
            'categories' => Category::all(),
            'title' => "Modification d'un Nuancier Façade",
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NuancierFacade  $nuancierFacade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NuancierFacade $nuancierFacade)
    {
        //dd($request->all());

        $validators = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'content' => 'nullable|string',
            'document' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:1024',
        ]);

        if ($validators->fails()) {
            return redirect()->back()->withErrors($validators)->withInput();
        }

        $isUpdate = $nuancierFacade->update([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title'), '-'),
            'category_id' => $request->input('category_id'),
            'content' => $request->input('content', null),
        ]);

        if ($isUpdate) {

            if ($request->hasFile('document')) {
                $files = $request->file('document');
                $this->saveDocument($files, $nuancierFacade, 'image');
            }

            return redirect()->route('nuancierFacade.index')->with('success', 'Suppression définitive réussie');
        }

        return redirect()->back()->with('error', 'Échec de la suppression définitive');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NuancierFacade  $nuancierFacade
     * @return \Illuminate\Http\Response
     */
    public function destroy(NuancierFacade $nuancierFacade)
    {
        if($nuancierFacade->delete()){
            return redirect()->route('nuancierFacade.index')->with('success', "Action reusit");
        }
        return redirect()->route('nuancierFacade.index')->with('error', 'Une erreur est survenue')->withInput();
    }

    public function updateOrder(Request $request){
        //dd($request->all());
        $itemsIds = json_decode($request->input('itemsIds'));

        // Mettez à jour l'ordre des images en fonction des identifiants triés
        foreach ($itemsIds as $index => $itemId) {
            $nuancier = NuancierFacade::where('id', $itemId)->first();
            if ($nuancier) {
                $nuancier->update(['priority' => $index + 1]);
            }

        }
        // Retournez une réponse appropriée (par exemple, un message de succès)
        return response()->json(['message' => 'L\'ordre des catégories a été mis à jour avec succès.', 'code' => 0]);
    }

    public function trashed(){

        $nuancier = NuancierFacade::onlyTrashed()->get();

        return view('backend.resources.nuancier-facade.index', [
            'nuanciers' => $nuancier,
            'title' => 'Liste des Articles supprimés'
        ]);

    }

    public function restore(string $id){

        $nuancier = NuancierFacade::withTrashed()->find($id);

        if($nuancier->restore()){

            return redirect()->route('nuancierFacade.index')->with('success', 'Réstauration réussit');
        }
        return back()->with('error', 'Echec de réstauration');

    }

    public function forceDelete(string $id){

        $article = Article::withTrashed()->find($id);

        foreach ($article->documents as $document) {
            $this->deleteImage($document->path);
            $document->delete();
        }

        // Suppression définitive des variantes associées
        $article->variants()->withTrashed()->forceDelete();

        if (!$article) {
            return back()->with('error', 'article introuvable');
        }

        if ($article->forceDelete()) {
            return redirect()->route('article.index')->with('success', 'Suppression définitive réussie');
        }

        return redirect()->back()->with('error', 'Échec de la suppression définitive');
    }

    private function moveImage($file)
    {
        $currentDateTime = Carbon::now();
        $formattedDateTime = $currentDateTime->format('Ymd_His');

        $path_file = (string) Str::uuid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/resources/nuanciers_facades/'), $path_file);

        return "assets/resources/nuanciers_facades/" . $path_file;
    }

    // Méthode pour supprimer une image
    private function deleteImage($path)
    {
        if ( file_exists( public_path($path) ) ) {
            unlink(public_path($path));
        }
    }

    private function saveDocument($files, NuancierFacade $nuancier, string $type){

        if (is_array($files)) {

            foreach ($files as $file) {
                $documentPath = $this->moveImage($file);
                $document = new Document(['path' => $documentPath, 'type' => $type]);
                $nuancier->document()->save($document);
            }

        } else {

            $documentPath = $this->moveImage($files);
            $document = new Document(['path' => $documentPath, 'type' => $type]);
            $nuancier->document()->save($document);

        }
    }

    public function uploadDocument(Request $request, NuancierFacade $nuancier){

        if ($request->hasFile('document')) {
            $files = $request->file('document');
            //dd($files);
            if (is_array($files)) {
                foreach ($files as $file) {
                    $documentPath = $this->moveImage($file);
                    $document = new Document(['type' => 'image', 'path' => $documentPath]);
                    $nuancier->documents()->save($document);
                    //dump($imagePath);
                }
            } else {
                $documentPath = $this->moveImage($files);
                $document = new Document(['type' => 'image', 'path' => $documentPath]);
                $nuancier->documents()->save($document);
            }
            return response()->json(['message' => 'Votre Image a bien été mis à jour', 'code' => 0]);
        }
        return response()->json(['message' => 'Aucune image trouvée.', 'code' => 1]);
    }
}
