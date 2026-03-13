<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactUs;
use App\Mail\Devis;
use App\Models\Blog;
use App\Models\Category;
use App\Models\NuancierFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{

    public function home(){
        return view('frontend.pages.home', [
            'blogs' => Blog::take(3)->get(),
        ]);
    }

    public function cuisine_sur_mesure_reunion(){
        return view('frontend.pages.cuisines.cuisine_sur_mesure_reunion');
    }

    public function cuisine_moderne_reunion(){
        return view('frontend.pages.cuisines.cuisine_moderne_reunion');
    }

    public function cuisine_ilot_central_reunion(){
        return view('frontend.pages.cuisines.cuisine_ilot_central_reunion');
    }

    public function cuisine_petit_espace_reunion(){
        return view('frontend.pages.cuisines.cuisine_petit_espace_reunion');
    }

    public function prix_cuisine_equipee_reunion(){
        return view('frontend.pages.cuisines.prix_cuisine_equipee_reunion');
    }

    public function materiaux_cuisine_reunion(){
        return view('frontend.pages.cuisines.materiaux_cuisine_reunion');
    }

    public function plan_de_travail_cuisine_reunion(){
        return view('frontend.pages.cuisines.plan_de_travail_cuisine_reunion');
    }

    public function dressing(){
        return view('frontend.pages.dressing');
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function nuancier_de_facades(string $nuancierFacadeSlug = ""){

        if ($nuancierFacadeSlug !== ""){

            $nuancier = NuancierFacade::where('slug', $nuancierFacadeSlug)->first();

            return view('frontend.pages.material-and-color.facade.facade', [
                'nuancier' => $nuancier
            ]);
        }

        return view('frontend.pages.material-and-color.nuanciers-de-facade', [
            'categories' => $categories = Category::whereIn('id', [1, 2, 3])->get(),
            'nuanciers' => NuancierFacade::whereIn('category_id', $categories->pluck('id'))->get()
        ]);
    }
    public function nuancier_en_ceramique(string $nuancierSlug = ""){

        if ($nuancierSlug !== ""){

            $nuancier = NuancierFacade::where('slug', $nuancierSlug)->first();

            return view('frontend.pages.material-and-color.facade.facade', [
                'nuancier' => $nuancier
            ]);
        }

        return view('frontend.pages.material-and-color.nuanciers-en-ceramique', [
            'categories' => $categories = Category::whereIn('id', [4, 5])->get(),
            'nuanciers' => NuancierFacade::whereIn('category_id', $categories->pluck('id'))->get()
        ]);
    }
    public function nuancier_hpl(){
        return view('frontend.pages.material-and-color.nuanciers-hpl');
    }

    public function projects(){
        return view('frontend.pages.projects.index');
    }

    public function project(){
        return view('frontend.pages.projects.show');
    }

    public function services(){}

    public function service(){}

    public function blogs(){
        return view('frontend.pages.blog.index', [
            "blogs" => Blog::paginate(9)
        ]);
    }

    public function blog(string $slug){

        $blog = Blog::where('slug', $slug)->firstOrfail();
        return view('frontend.pages.blog.show', [
            "blog" => $blog
        ]);
    }

    public function gallery(){
        return view('frontend.pages.realisations');
    }

    public function contact(Request $request){
        if ($request->isMethod('POST')) {
            //
            $validators = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'phone' => 'required|string|max:255',
                'message' => 'required|string',
                'city' => 'required|string|in:saint-denis,saint-louis,saint-andré,tampon'
            ]);

            if ($validators->fails()) {
                return response()->json(['errors' => $validators->errors()->all()]);
            }

            Mail::to('info@cuisinehabitat.re')->bcc(['samuel.grondin@cuisinehabitat.re', 'marketing@kitm.re'])->send(new ContactUs((object) $request->except(['_token'])));
            return response()->json("success");
        }
        return view('frontend.pages.contact');
    }

    public function votre_projet_en_3_etapes(){
        return view('frontend.pages.votre_projet_en_3_etapes');
    }

    public function evier_granit_3_dimensions(){
        return view('frontend.pages.equipement.evier_granit_3_dimensions');
    }

    public function electromenager(){
        return view('frontend.pages.equipement.electromenager');
    }

    public function solutions_de_rangement(){
        return view('frontend.pages.equipement.solutions_de_rangement');
    }

    public function promoteur_immobilier(){
        return view('frontend.pages.promoteur-immobilier');
    }

    public function nos_magasins(string $storeId = null){

        switch ($storeId){
            case "saint-denis":
                return view('frontend.pages.stores.show', ['storeId' => $storeId]);
                break;
            case "saint-louis":
                return view('frontend.pages.stores.show', ['storeId' => $storeId]);
                break;
            case "saint-andre":
                return view('frontend.pages.stores.show', ['storeId' => $storeId]);
                break;
            case "le-tampon":
                return view('frontend.pages.stores.show', ['storeId' => $storeId]);
                break;
            default:
                return view('frontend.pages.stores.index');
                break;
        }
        return view('frontend.pages.stores.index');
    }

    public function landing(Request $request){
        if ($request->isMethod('POST')) {
            $validators = Validator::make($request->all(), [
                'nom' => 'required|string|max:255',
                'telephone' => 'required|string|max:20',
                'ville' => 'required|string|max:255',
                'projet' => 'required|string|min:10'
            ]);

            if ($validators->fails()) {
                return response()->json([
                    'errors' => $validators->errors()->all()
                ], 422);
            }

            $data = (object) $request->except(['_token']);
            Mail::to('info@cuisinehabitat.re')
                ->bcc([
                    'samuel.grondin@cuisinehabitat.re',
                    'marketing@kitm.re'
                ])
                ->send(new Devis($data));

            return response()->json([
                'success' => true,
                'message' => 'Votre demande a été envoyée avec succès.'
            ]);
        }
        return view('frontend.pages.landing');
    }
}
