<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\Search;
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
Route::get('404', function(){
    return abort(404);
 })->name("P404");

Route::get('/', function () {
    return view('home');
})->name("index");

Route::post('/store',[CartController::class,'store'])->name("cart.store");
Route::post('/storeqte',[CartController::class,'storeQte'])->name("cart.storeQte");
Route::get('/inc/{idm}/{rowId}',[CartController::class,'increaseQte'])->name("cart.inc");
Route::get('/dec/{idm}/{rowId}',[CartController::class,'DecreaseQte'])->name("cart.dec");
Route::get('/sup/{idm}/{rowId}',[CartController::class,'Remove'])->name("cart.sup");
Route::post('/ecommerce/magasin/{idmag}',[CartController::class,'update'])->name("cart.update");

Route::get('/ecommerce/magasin/{idmag}/produit-detail',[EcommerceController::class,'showDetails'])->name("ecommerce.produitdetails.show");
Route::get('/ecommerce/magasin/{idmagnewA}/new-arrival',[EcommerceController::class,'showNewAr'])->name("ecommerce.newArriv.show");
Route::post('/ecommerce/magasin/{id}',[Search::class,'produit_search'])->name("produit.search");
Route::get('/ecommerce/magasin/{id}/shoping-cart',[CartController::class,'index'])->name("cart.index");
Route::post('/ecommerce/magasin/{id}/shoping-cart',[CommandeController::class,'store'])->name("cmd.store");
Route::get('/ecommerce/magasin/{id}/{filtermode}',[Search::class,'produit_filter'])->name("produit.filter");
Route::get('/ecommerce/magasin/{id}/{min}/{max}',[Search::class,'produit_prix'])->name("produit.filterprix");
Route::get('/ecommerce/magasin/{id}',[EcommerceController::class,'show'])->name("ecommerce.show");



Route::post('/shoping-cart',[CartController::class,'edit'])->name("cart.edit");

Route::get('/ecommerce/magasin/{id}/product',[EcommerceController::class,'show'])->name("ecommerce.produit.show");
Route::get('/ecommerce/magasin/{id}/product/{idProd}',[EcommerceController::class,'showProd'])->name("ecommerce.produit.showProd");

Route::get('/docs', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return view('layouts.product');
});



Route::get('/contact', function () {
    return view('layouts.contact');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
