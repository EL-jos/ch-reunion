<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.resources.blog.index', [
            'blogs' => Blog::all(),
            'title' => "Liste des blogs"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.resources.blog.form', [
            'blog' => new Blog(),
            'title' => "Création d'un blog",
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
        $validators = Validator::make($request->all(), [
            'title' => 'required|string|unique:blogs,title',
            'content' => 'required|string',
            'document' => 'required|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp|max:1024',
        ]);
        if ($validators->fails()) {
            //dd($validators->errors());
            return redirect()->back()->withErrors($validators)->withInput();
        }

        $blog = Blog::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'content' => $request->input('content'),
        ]);

        if($blog){

            if ($request->hasFile('document')) {
                $files = $request->file('document');
                $this->saveDocument($files, $blog, 'image');
            }

            return redirect()->route('blog.index')->with('success', "Action réussit");
        }

        return redirect()->route('blog.index')->with('error', 'Une erreur est survenue');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('backend.resources.blog.form', [
            'blog' => $blog,
            'title' => "Modification d'un blog",
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $validators = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
            'document' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp|max:1024',
        ]);
        if ($validators->fails()) {
            return redirect()->back()->withErrors($validators)->withInput();
        }

        $isUpdate = $blog->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        if($isUpdate){

            if ($request->hasFile('document')) {
                $files = $request->file('document');
                $this->saveDocument($files, $blog, 'image');
            }

            return redirect()->route('blog.index')->with('success', "Action réussit");
        }

        return redirect()->route('blog.index')->with('error', 'Une erreur est survenue');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if ($blog->delete()) {

            return redirect()->route('blog.index')->with('success', "Action réussit");
        }

        return redirect()->route('blog.index')->with('error', 'Une erreur est survenue');
    }

    private function moveImage($file)
    {
        $currentDateTime = Carbon::now();
        $formattedDateTime = $currentDateTime->format('Ymd_His');

        $path_file = (string) Str::uuid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/resources/blogs/'), $path_file);

        return "assets/resources/blogs/" . $path_file;
    }

    // Méthode pour supprimer une image
    private function deleteImage($path)
    {
        if ( file_exists( public_path($path) ) ) {
            unlink(public_path($path));
        }
    }

    private function saveDocument($files, Blog $blog, string $type){

        if (is_array($files)) {

            foreach ($files as $file) {
                $documentPath = $this->moveImage($file);
                $document = new Document(['path' => $documentPath, 'type' => $type]);
                $blog->document()->save($document);
            }

        } else {

            $documentPath = $this->moveImage($files);
            $document = new Document(['path' => $documentPath, 'type' => $type]);
            $blog->document()->save($document);

        }
    }

    public function uploadDocument(Request $request, Blog $blog){

        if ($request->hasFile('document')) {
            $files = $request->file('document');
            //dd($files);
            if (is_array($files)) {
                foreach ($files as $file) {
                    $documentPath = $this->moveImage($file);
                    $document = new Document(['type' => 'image', 'path' => $documentPath]);
                    $blog->document()->save($document);
                    //dump($imagePath);
                }
            } else {
                $documentPath = $this->moveImage($files);
                $document = new Document(['type' => 'image', 'path' => $documentPath]);
                $blog->document()->save($document);
            }
            return response()->json(['message' => 'Votre Image a bien été mis à jour', 'code' => 0]);
        }
        return response()->json(['message' => 'Aucune image trouvée.', 'code' => 1]);
    }

    public function trashed(){
        $blogs = Blog::onlyTrashed()->get();

        return view('backend.resources.blog.index', [
            'blogs' => $blogs,
            'title' => 'Liste des blogs supprimés'
        ]);

    }

    public function restore(string $id){

        $blog = Blog::withTrashed()->find($id);
        if($blog->restore()){
            return redirect()->route('blog.index')->with('success', 'Réstauration réussit');
        }
        return back()->with('error', 'Echec de réstauration');

    }

    public function forceDelete(string $id){

        $blog = Blog::withTrashed()->find($id);

        $this->deleteImage($blog->document->path);
        $blog->document->delete();

        if (!$blog) {
            return back()->with('error', 'article introuvable');
        }

        if ($blog->forceDelete()) {
            return redirect()->route('blog.index')->with('success', 'Suppression définitive réussie');
        }

        return redirect()->back()->with('error', 'Échec de la suppression définitive');
    }
}
