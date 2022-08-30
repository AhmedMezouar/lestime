<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DashBoardVente;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\Search;
use App\Http\Controllers\SearchDashboard;
use App\Http\Controllers\StateDashboard;
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

Route::get('/ecommerce/magasin/{id}/product',[EcommerceController::class,'showAllProduit'])->name("ecommerce.produit.show");
Route::get('/ecommerce/magasin/{idmag}/about',[EcommerceController::class,'showAbout'])->name("ecommerce.showAbout");
Route::get('/ecommerce/magasin/{idmag}/actualite-blog',[EcommerceController::class,'showBlog'])->name("ecommerce.showBlog");
Route::get('/ecommerce/magasin/{idmag}/contact',[EcommerceController::class,'showContact'])->name("ecommerce.showContact");
Route::get('/ecommerce/magasin/{id}/product/{idProd}',[EcommerceController::class,'showProd'])->name("ecommerce.produit.showProd");

Route::get('/ecommerce/magasin/{idmag}/produit-detail',[EcommerceController::class,'showDetails'])->name("ecommerce.produitdetails.show");
Route::get('/ecommerce/magasin/{idmagnewA}/new-arrival',[EcommerceController::class,'showNewAr'])->name("ecommerce.newArriv.show");
Route::post('/ecommerce/magasin/search/{id}',[Search::class,'produit_search'])->name("produit.search");
Route::post('/ecommerce/magasin/searchArr/{id}',[Search::class,'produit_search2'])->name("produit.searchArrival");


Route::post('/ecommerce/magasin/{id}/shoping-cart-store',[CommandeController::class,'store'])->name("cmd.store");
Route::post('/ecommerce/magasin/{id}/shoping-cart-view',[CartController::class,'getTarif'])->name("cart.updatetarif");
Route::get('/ecommerce/magasin/{id}/shoping-cart',[CartController::class,'index'])->name("cart.index");

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






Route::get('/dashboard',[DashBoardVente::class,'index'])->middleware(['auth'])->name("dashboard");

Route::post('/dashboard/storeClient',[ClientController::class,'store'])->middleware(['auth'])->name("dashboard.client.store");
Route::get('/dashboard/clients',[ClientController::class,'index'])->middleware(['auth'])->name("dashboard.client.index");
Route::get('/dashboard/client-add',[ClientController::class,'indexNvClient'])->middleware(['auth'])->name("dashboard.client.addClient");


Route::get('/dashboard/commande/etat={etat}',[CommandeController::class,'filter'])->middleware(['auth'])->name("dashboard.commande.filter");
Route::get('/dashboard/commande/detai={idcmd}',[CommandeController::class,'indexdetai'])->middleware(['auth'])->name("dashboard.commande.indexdetai");
Route::post('/dashboard/commande/changestate',[CommandeController::class,'changeState'])->middleware(['auth'])->name("dashboard.commande.changestate");
Route::post('/dashboard/commande',[SearchDashboard::class,'cmd_search'])->middleware(['auth'])->name("dashboard.commande.cmd_search");
Route::post('/dashboard/clients',[SearchDashboard::class,'client_search'])->middleware(['auth'])->name("dashboard.commande.client_search");
Route::get('/dashboard/commande',[CommandeController::class,'index'])->middleware(['auth'])->name("dashboard.commande.index");
Route::post('/dashboard/product/add',[ProduitController::class,'store'])->middleware(['auth'])->name("dashboard.product.storeDb");
Route::post('/dashboard/product/add-other',[ProduitController::class,'storeOther'])->middleware(['auth'])->name("dashboard.product.storeDbOther");
Route::post('/dashboard/product/add-pack',[ProduitController::class,'storepack'])->middleware(['auth'])->name("dashboard.product.storeDbpack");

Route::post('/dashboard/product',[ProduitController::class,'store'])->middleware(['auth'])->name("dashboard.product.storeDb");
Route::get('/dashboard/product',[ProduitController::class,'indexDashboard'])->middleware(['auth'])->name("dashboard.product.index");


Route::post('/dashboard/product',[SearchDashboard::class,'produit_search'])->middleware(['auth'])->name("dashboard.product.search");
Route::post('/dashboard/statistique/client',[SearchDashboard::class,'stateclient_search'])->middleware(['auth'])->name("dashboard.state.stateclient_search");
Route::get('/dashboard/statistique/client',[StateDashboard::class,'indexclient'])->middleware(['auth'])->name("dashboard.state.client");
Route::post('/dashboard/statistique/produit',[SearchDashboard::class,'stateproduit_search'])->middleware(['auth'])->name("dashboard.state.stateproduit_search");
Route::get('/dashboard/statistique/produit',[StateDashboard::class,'indexproduit'])->middleware(['auth'])->name("dashboard.state.produit");

Route::post('/dashboard/product/edit/updateprod',[ProduitController::class,'updateprod'])->middleware(['auth'])->name("dashboard.product.updateprod");
Route::post('/dashboard/accessoire/edit/updateprodacc',[ProduitController::class,'updateprodacc'])->middleware(['auth'])->name("dashboard.product.updateprodacc");
Route::post('/dashboard/product/edit/applypromo',[ProduitController::class,'applypromo'])->middleware(['auth'])->name("dashboard.product.applypromo");
Route::post('/dashboard/accessoire/edit/applypromo',[ProduitController::class,'applypromoacc'])->middleware(['auth'])->name("dashboard.product.applypromoacc");
Route::get('/dashboard/product/add',[ProduitController::class,'storeindex'])->middleware(['auth'])->name("dashboard.product.store");
Route::get('/dashboard/product/add-other',[ProduitController::class,'storeindexother'])->middleware(['auth'])->name("dashboard.product.storeother");
Route::get('/dashboard/product/add-pack',[ProduitController::class,'storeindexpack'])->middleware(['auth'])->name("dashboard.product.storepack");
Route::get('/dashboard/product/edit/{idprod}/size={size}',[ProduitController::class,'editindex'])->middleware(['auth'])->name("dashboard.product.edit");
Route::get('/dashboard/accessoire/edit/{idacc}',[ProduitController::class,'editindexacc'])->middleware(['auth'])->name("dashboard.product.editacc");

require __DIR__.'/auth.php';
