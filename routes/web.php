<?php


//use App\Http\Controllers\Controller;
//use Barryvdh\Debugbar\Facades\Debugbar;
//use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Support\Facades\Route;

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


/*
Route::get('/', function () {

    return view('welcome');
});
*/


// GET
Route::get('blog', [PostsController::class, 'index']);
// az 'index' a metódus, amit el akarok érni a PostsController osztályon belül
Route::get('/blog/{id}', [PostsController::class, 'show']);


// POST
Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'store']);


// PUT or PATCH
Route::get('/blog/edit/{id}', [PostsController::class, 'edit']);
Route::patch('/blog/{id}', [PostsController::class, 'update']);



// DELETE
Route::delete('/blog/{id}', [PostsController::class, 'destroy']);


//Route::resource('/blog', PostsController::class);

Route::get('/', HomeController::class);
//az __invoke metódus útvonala




// Multiple HTTP verbs
// Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
// Route::any('/blog', [PostsController::class, 'index']);

/* Return view */
//Route::view('/blog', 'blog.index', ['name' => 'something']);


//az összes metódus, amit a PostsController-ben találunk






/*
    HTTP Methods
    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource (minden értéket módosít az adott sorban)
    PATCH - Modify a resource (csak azokat az értékeket módosítja, amik változtak)
    DELETE - Delete a resource
    OPTIONS - Ask the server which verbs are allowed
*/