<?php

    use App\Http\Controllers\PostsController;
    use App\Http\Controllers\HomePageController;
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

    // oryginalna strona startowa
    Route::get('/welcome', function ()
    {
        return view('welcome');
    });

    // strona główna
    Route::get('/', HomePageController::class);

    // wszystkie posty
    Route::get('/posts', [PostsController::class, 'index']);

    // edycja postu
    Route::get('/posts/edit/{id}', [PostsController::class, 'edit']);

    // zapis postu w bazie
    Route::post('/posts/update/{id}', [PostsController::class, 'update']);

    // nowy post
    Route::get('/posts/new', [PostsController::class, 'new']);

    // zapis nowego postu w bazie
    Route::post('/posts/create', [PostsController::class, 'create']);

    // usunięcie postu
    Route::get('/posts/delete/{id}', [PostsController::class, 'delete']);

    // usunięte posty
    Route::get('/posts/deleted', [PostsController::class, 'showDeleted']);

    // przywrócenie postu
    Route::get('/posts/undelete/{id}', [PostsController::class, 'unDelete']);
