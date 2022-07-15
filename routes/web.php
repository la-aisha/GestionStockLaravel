<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
/* 
Route::get('registered', function () {
    return view('welcome');
});
 */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categorie/add', [App\Http\Controllers\CategorieController::class,'add' ])->name('addcategorie');
Route::get('/categorie/edit/{id}', [App\Http\Controllers\CategorieController::class, 'edit'])->name('editcategorie');
Route::post('/categorie/update', [App\Http\Controllers\CategorieController::class , 'update'])->name('updatecategorie');
Route::get('/categorie/delete/{id}', [App\Http\Controllers\CategorieController::class, 'delete'])->name('deletecategorie');
Route::get('/categorie/getAll', [App\Http\Controllers\CategorieController::class, 'getAll'])->name('getallcategorie');



Route::get('/produit/add', [App\Http\Controllers\HomeController::class,'add' ])->name('addproduit');
Route::get('/produit/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('editproduit');
Route::post('/produit/update', [App\Http\Controllers\HomeController::class , 'update'])->name('addproduit');
Route::get('/produit/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('deleteproduit');
Route::get('/produit/getAll', [App\Http\Controllers\HomeController::class, 'getAll'])->name('getallproduit');


Route::get('/entree/add', [App\Http\Controllers\HomeController::class,'add' ])->name('addentree');
Route::get('/entree/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('editentree');
Route::post('/entree/update', [App\Http\Controllers\HomeController::class , 'update'])->name('addentree');
Route::get('/entree/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('deleteentree');
Route::get('/entree/getAll', [App\Http\Controllers\HomeController::class, 'getAll'])->name('getallentree');


Route::get('/sortie/add', [App\Http\Controllers\HomeController::class,'add' ])->name('addsortie');
Route::get('/sortie/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('editsortie');
Route::post('/sortie/update', [App\Http\Controllers\HomeController::class , 'update'])->name('addsortie');
Route::get('/sortie/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('deletesortie');
Route::get('/sortie/getAll', [App\Http\Controllers\HomeController::class, 'getAll'])->name('getallsortie');

Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
//Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register');
Route::get('home',function(){
    return view('home');
});

?>