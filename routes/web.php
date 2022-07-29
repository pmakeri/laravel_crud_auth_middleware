<?php

use App\Http\Controllers\HomeController;
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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home');
});


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('form', function () {
//     return view('form');
// })->middleware(['auth']);

Route::get('home', [HomeController::class, 'home']);
// Route::get('/about', [HomeController::class, 'about'])->name('about');

// Route::get('home', [HomeController::class, 'home']);
// Route::get('list', [HomeController::class, 'list'])->middleware(['auth']);
// Route::get('delete/{id}/biodata', [HomeController::class, 'delete'])->middleware(['auth'])->name('delete');
// Route::post('create',  [HomeController::class, 'create'])->middleware(['auth'])->name('create');
// Route::get('edit/{id}/biodata',  [HomeController::class, 'edit'])->middleware(['auth'])->name('edit');
// Route::post('/update/{id}',  [HomeController::class, 'update'])->middleware(['auth'])->name('update');


Route::group(['middleware' => 'auth'], function () {
    // User needs to be authenticated to enter here.
    Route::get('/form', function ()    {
            return view('form');
    });

    Route::get('list', [HomeController::class, 'list']);
    Route::get('delete/{id}/biodata', [HomeController::class, 'delete'])->name('delete');
    Route::post('create',  [HomeController::class, 'create'])->name('create');
    Route::get('edit/{id}/biodata',  [HomeController::class, 'edit'])->name('edit');
    Route::post('/update/{id}',  [HomeController::class, 'update'])->name('update');
   
});