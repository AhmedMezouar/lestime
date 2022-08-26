<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\ProduitController;
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
Route::get('/update/{idm}/{wil}/{type}',[CartController::class,'getTarif'])->name("cart.updatetarif");
Route::get('/inc/{idm}/{rowId}',[CartController::class,'increaseQte'])->name("cart.inc");
Route::get('/dec/{idm}/{rowId}',[CartController::class,'DecreaseQte'])->name("cart.dec");
Route::get('/sup/{idm}/{rowId}',[CartController::class,'Remove'])->name("cart.sup");
Route::post('/ecommerce/magasin/{idmag}',[CartController::class,'update'])->name("cart.update");

Route::get('/ecommerce/magasin/{id}/product',[EcommerceController::class,'showAllProduit'])->name("ecommerce.produit.show");
Route::get('/ecommerce/magasin/{idmag}/about',[EcommerceController::class,'showAbout'])->name("ecommerce.showAbout");
Route::get('/ecommerce/magasin/{idmag}/actualite-blog',[EcommerceController::class,'showBlog'])->name("ecommerce.showBlog");
Route::get('/ecommerce/magasin/{idmag}/contact',[EcommerceController::class,'showContact'])->name("ecommerce.showContact");
Route::get('/ecommerce/magasin/{id}/product/{idProd}',[EcommerceController::class,'showProd'])->name("ecommerce.produit.showProd");

Route::get('/ecommerce/magasin/{idmag}/produit-detail',[EcommerceController::class,'showDetails'])->name("ecommerce.produitdetails.show");
Route::get('/ecommerce/magasin/{idmagnewA}/new-arrival',[EcommerceController::class,'showNewAr'])->name("ecommerce.newArriv.show");
Route::post('/ecommerce/magasin/search/{id}',[Search::class,'produit_search'])->name("produit.search");
Route::post('/ecommerce/magasin/searchArr/{id}',[Search::class,'produit_search2'])->name("produit.searchArrival");

Route::get('/ecommerce/magasin/{id}/shoping-cart',[CartController::class,'index'])->name("cart.index");
Route::post('/ecommerce/magasin/{id}/shoping-cart',[CommandeController::class,'store'])->name("cmd.store");
Route::get('/ecommerce/magasin/{id}/{filtermode}',[Search::class,'produit_filter'])->name("produit.filter");
Route::get('/ecommerce/magasin/{id}/{min}/{max}',[Search::class,'produit_prix'])->name("produit.filterprix");
Route::get('/ecommerce/magasin/{id}',[EcommerceController::class,'show'])->name("ecommerce.show");



Route::post('/shoping-cart',[CartController::class,'edit'])->name("cart.edit");


Route::get('/docs', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return view('layouts.product');
});




Route::get('/dashboard/index', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard.index');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/dashboard/storeClient',[ClientController::class,'store'])->middleware(['auth'])->name("dashboard.client.store");
Route::get('/dashboard/clients',[ClientController::class,'index'])->middleware(['auth'])->name("dashboard.client.index");
Route::get('/dashboard/client-add',[ClientController::class,'indexNvClient'])->middleware(['auth'])->name("dashboard.client.addClient");

Route::post('/dashboard/commande',[CommandeController::class,'changeState'])->middleware(['auth'])->name("dashboard.commande.changestate");
Route::get('/dashboard/commande',[CommandeController::class,'index'])->middleware(['auth'])->name("dashboard.commande.index");
Route::get('/dashboard/commande/etat={etat}',[CommandeController::class,'filter'])->middleware(['auth'])->name("dashboard.commande.filter");
Route::post('/dashboard/commande',[CommandeController::class,'changeState'])->middleware(['auth'])->name("dashboard.commande.changestate");

Route::get('/dashboard/product',[ProduitController::class,'index'])->middleware(['auth'])->name("dashboard.product.index");
Route::get('/dashboard/product/add',[ProduitController::class,'storeindex'])->middleware(['auth'])->name("dashboard.product.store");
Route::get('/dashboard/product/edit',[ProduitController::class,'editindex'])->middleware(['auth'])->name("dashboard.product.edit");

require __DIR__.'/auth.php';
