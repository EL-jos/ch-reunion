<?php
set_time_limit(3600);

use App\Http\Controllers\frontend\PageController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use Carbon\Carbon;
use App\Models\Document;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home.page');
});

Route::controller(PageController::class)->group(function () {

    Route::get('/accueil', 'home')->name('home.page');

    Route::prefix('cuisines')->group(function () {
        Route::get('/cuisine-sur-mesure-reunion/', 'cuisine_sur_mesure_reunion')->name('cuisine_sur_mesure_reunion.page');
        Route::get('/cuisine-moderne-reunion/', 'cuisine_moderne_reunion')->name('cuisine_moderne_reunion.page');
        Route::get('/cuisine-ilot-central-reunion/', 'cuisine_ilot_central_reunion')->name('cuisine_ilot_central_reunion.page');
        Route::get('/cuisine-petit-espace-reunion/', 'cuisine_petit_espace_reunion')->name('cuisine_petit_espace_reunion.page');
        Route::get('/prix-cuisine-equipee-reunion/', 'prix_cuisine_equipee_reunion')->name('prix_cuisine_equipee_reunion.page');
        Route::get('/matériaux-cuisine-reunion/', 'matériaux_cuisine_reunion')->name('matériaux_cuisine_reunion.page');
        Route::get('/plan-de-travail-cuisine-reunion/', 'plan_de_travail_cuisine_reunion')->name('plan_de_travail_cuisine_reunion.page');
    });

    Route::prefix('dressings')->group(function () {
        Route::get('/dressing-sur-mesure-reunion/', 'dressing_sur_mesure_reunion')->name('dressing_sur_mesure_reunion.page');
        Route::get('/dressing-petit-espace-reunion/', 'dressing_petit_espace_reunion')->name('dressing_petit_espace_reunion.page');
        Route::get('/amenagement-placard-reunion/', 'amenagement_placard_reunion')->name('amenagement_placard_reunion.page');
    });

    Route::prefix('cuisiniste-a-la-reunion')->group(function () {
        Route::get("/", "nos_magasins")->name("nos_magasins.page");
        Route::get("/cuisiniste-{storeId}", "nos_magasins")->name("nos_magasins.show");
    });

    Route::prefix('conseils-et-inspirations')->group(function () {
        Route::get("/blog-cuisine-reunion/", "blog_cuisine_reunion")->name("blog_cuisine_reunion.page");
        Route::get("/choisir-cuisine-reunion/", "choisir_cuisine_reunion")->name("choisir_cuisine_reunion.page");
        Route::get("/cuisine-ouverte-ou-fermée/", "cuisine_ouverte_ou_fermée")->name("cuisine_ouverte_ou_fermée.page");
        Route::get("/budget-cuisine-équipée-reunion/", "budget_cuisine_équipée_reunion")->name("budget_cuisine_équipée_reunion.page");
        Route::get("/couleurs-cuisine-tendance/", "couleurs_cuisine_tendance")->name("couleurs_cuisine_tendance.page");
        Route::get("/optimiser-espace-cuisine/", "optimiser_espace_cuisine")->name("optimiser_espace_cuisine.page");
    });

    Route::get('/destockage-cuisine-reunion/', 'destockage_cuisine_reunion')->name('destockage_cuisine_reunion.page');


    Route::get('/dressing-sur-mesure', 'dressing')->name('dressing.page');
    Route::get('/qui-sommes-nous-a-la-reunion', 'about')->name('about.page');

    Route::group(['prefix' => 'nos-realisations'], function () {
        Route::get('/', 'projects')->name('projects.page');
        Route::get('/realisation/uuid', 'project')->name('project.show');
    });

    Route::group(['prefix' => 'services'], function () {
        Route::get('/', 'services')->name('services.page');
        Route::get('/service/uuid', 'service')->name('service.show');
    });

    Route::get('/galerie', 'gallery')->name('gallery.page');

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'blogs')->name('blogs.page');
        Route::get('/{slug}', 'blog')->name('blog.show');
    });

    Route::match(['GET', 'POST'], '/contact', 'contact')->name('contact.page');

    Route::get('/cuisines-modernes', 'cuisines_modernes')->name('cuisines_modernes.page');

    /**
     * Routes pour le groupe materielset couleur
     */

    Route::group(['prefix' => 'nuancier-des-facades'], function () {
        Route::get('/', 'nuancier_de_facades')->name('nuancier_de_facades.page');
        Route::get('/{nuancierFacadeSlug}', 'nuancier_de_facades')->name('nuancier_de_facade.show');
    });
    Route::get('/nuancier-en-ceramique', 'nuancier_en_ceramique')->name('nuancier_en_ceramique.page');
    Route::get('/nuancier-stratifiee-hpl', 'nuancier_hpl')->name('nuancier_hpl.page');

    /**
     * Routes pour le groupe équipements
     */
    Route::get('/evier-granit-3-dimensions', 'evier_granit_3_dimensions')->name('evier_granit_3_dimensions.page');
    Route::get('/electromenager', 'electromenager')->name('electromenager.page');
    Route::get('/solutions-de-rangement', 'solutions_de_rangement')->name('solutions_de_rangement.page');

    Route::get('/votre-projet-en-3-etapes', 'votre_projet_en_3_etapes')->name('votre_projet_en_3_etapes.page');

    Route::get('/promotion-immobiliere', 'promoteur_immobilier')->name('promoteur_immobilier.page');

    //Route::get("/nos-magasins-literie-a-la-reunion", "nos_magasins")->name("nos_magasins.page");


    Route::match(['GET', 'POST'], '/landing', 'landing')->name('landing.page');
});

Route::group(['prefix' => 'backend'], function () {

    Route::controller(\App\Http\Controllers\backend\PageController::class)->group(function () {
        Route::get('/', 'dashboard')->name('backend.dashboard');
        route::get('/invoice-print/{order}', 'invoicePrint')->name('backend.invoice.print');
    });

    Route::resource('category', \App\Http\Controllers\backend\CategoryController::class)->except(['show']);
    Route::resource('blog', \App\Http\Controllers\backend\BlogController::class)->except(['show']);

    Route::resource('nuancierFacade', \App\Http\Controllers\backend\NuancierFacadeController::class)->except(['show']);
    Route::controller(\App\Http\Controllers\backend\NuancierFacadeController::class)->group(function () {
        Route::post('nuancierFacade/update-document/{nuancierFacade}', 'uploadDocument')->name('nuancierFacade.uploadDocument');
        Route::post('/nuancierFacade/updateOrder', 'updateOrder')->name('updateOrder.nuancierFacade');
    });

    Route::controller(\App\Http\Controllers\backend\DocumentController::class)->group(function () {
        Route::get('/document/encode/image/{path}/{model?}', 'encodeImage')->name('document.encodeImage');
        Route::delete('/document/{document}/{isMultiple}', 'destroy')->name('document.destroy');
        Route::post('/document/updateDocumentOrder', 'updateDocumentOrder')->name('updateDocumentOrder.document');
    });

    Route::group(['prefix' => 'trashed'], function (){
        Route::get('/category', ['as' => 'category.trashed', 'uses' => 'App\\Http\\Controllers\\backend\\CategoryController@trashed']);
        Route::get('/nuancierFacade', ['as' => 'nuancierFacade.trashed', 'uses' => 'App\Http\Controllers\backend\NuancierFacadeController@trashed']);
        Route::get('/blog', ['as' => 'blog.trashed', 'uses' => 'App\Http\Controllers\backend\BlogController@trashed']);
    });

    Route::group(['prefix' => 'restore'], function (){
        Route::delete('/category/{category}', ['as' => 'category.restore', 'uses' => 'App\\Http\\Controllers\\backend\\CategoryController@restore']);
        Route::delete('/nuancierFacade/{nuancierFacade}', ['as' => 'nuancierFacade.restore', 'uses' => 'App\\Http\\Controllers\\backend\\NuancierFacadeController@restore']);
        Route::delete('/blog/{blog}', ['as' => 'blog.restore', 'uses' => 'App\Http\Controllers\backend\BlogController@restore']);
    });

    Route::group(['prefix' => 'forceDelete'], function (){
        Route::delete('/category/{category}', ['as' => 'category.forceDelete', 'uses' => 'App\\Http\\Controllers\\backend\\CategoryController@forceDelete']);
        Route::delete('/nuancierFacade/{nuancierFacade}', ['as' => 'nuancierFacade.forceDelete', 'uses' => 'App\\Http\\Controllers\\backend\\NuancierFacadeController@forceDelete']);
        Route::delete('/blog/{blog}', ['as' => 'blog.forceDelete', 'uses' => 'App\Http\Controllers\backend\BlogController@forceDelete']);
    });


    Route::controller(\App\Http\Controllers\backend\BlogController::class)->group(function () {
        Route::post('blog/update-document/{blog}', 'uploadDocument')->name('blog.uploadDocument');
    });
});

Route::get('crawler/blogs', function (){
    try {
        // Démarrer une transaction
        DB::beginTransaction();
        // Initialiser le client HttpBrowser
        $client = new \Symfony\Component\BrowserKit\HttpBrowser(HttpClient::create([
            'timeout' => 60,
            //'http_version' => '1.1',
        ]));
        // Faire la requête GET
        $client->request('GET', 'https://cuisinehabitat.re/blog/page/11');
        // Obtenir le Crawler
        $crawler = $client->getCrawler();

        $links = collect($crawler->filter('#main-content .entry-content .et_pb_blog_grid article[id^="post-"] h2.entry-title a')->each(function (Crawler $node) {
           return $node->attr('href');
        }));

        //dd($links);
        $links->each(function ($link, $index) use ($client) {

            dump("N°:" . ($index + 1) . "\tLink:" . $link);
            $client->request('GET', $link);
            // Obtenir le Crawler
            $crawler2 = $client->getCrawler();

            $blog = $crawler2->filter('#main-content article.et_pb_post');


            $title = $blog->filter("h1.entry-title")->text();
            $slug = explode("/", $link)[3];
            $content = $blog->filter("div.entry-content")->html();
            //$image_url = $blog->filter(".et_post_meta_wrapper img")->attr('src');

            /**
             * @var \App\Models\Blog $blog
             */

            $blog  = Blog::create([
                'title' => $title,
                'slug' => $slug,
                'content' => $content,
            ]);

            /*if ($blog) {
                downloadAndSaveImage($image_url, $blog);
            } else {
                dump("************************* Errur sur [" . $title ."] *************************");
            }*/

        });

        // Commit la transaction si tout s'est bien passé
        DB::commit();


    }catch (\Exception $e){
        // En cas d'erreur, on rollback la transaction
        DB::rollBack();
        dump($e->getMessage());
    }

});

function downloadAndSaveImage($url, \App\Models\Blog $article)
{
    //for ($i = 0; $i < count($urls); $i++) {

        // Télécharger l'image depuis l'URL
        $uploadedFile = downloadImageFromUrl($url);

        // Utiliser la méthode saveDocument pour sauvegarder l'image
        saveDocument($uploadedFile, $article, 'image');

    //}

}

function downloadImageFromUrl($url)
{
    // Créer une instance du client Guzzle
    $client = new Client();

    // Envoyer une requête GET à l'URL de l'image
    $response = $client->get($url);

    // Obtenir le contenu de l'image
    $imageContents = $response->getBody()->getContents();

    // Extraire le nom de fichier à partir de l'URL
    $filename = basename($url);

    // Enregistrer temporairement l'image téléchargée
    $tempPath = sys_get_temp_dir() . '/' . $filename;
    file_put_contents($tempPath, $imageContents);

    // Créer un objet UploadedFile à partir du fichier temporaire
    return new UploadedFile(
        $tempPath,
        $filename,
        mime_content_type($tempPath),
        null,
        true // La dernière option signifie que le fichier est localement stocké
    );
}

function moveImage($file)
{
    $currentDateTime = Carbon::now();
    $formattedDateTime = $currentDateTime->format('Ymd_His');

    $path_file = (string) Str::uuid() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('assets/resources/blogs/'), $path_file);

    return "assets/resources/blogs/" . $path_file;
}
// Méthode pour supprimer une image
function deleteImage($path)
{
    if ( file_exists( public_path($path) ) ) {
        unlink(public_path($path));
    }
}

function saveDocument($files, \App\Models\Blog $article, string $type)
{
    if (is_array($files)) {

        foreach ($files as $file) {
            $documentPath = moveImage($file);
            $document = new Document(['path' => $documentPath, 'type' => $type]);
            $article->document()->save($document);
        }

    } else {

        $documentPath = moveImage($files);
        $document = new Document(['path' => $documentPath, 'type' => $type]);
        $article->document()->save($document);

    }
}
