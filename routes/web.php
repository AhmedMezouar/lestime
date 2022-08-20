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
    return view('home');
});

Route::get('/ecommerce', function () {
    return view('layouts.index');
});

Route::get('/product', function () {
    return view('layouts.product');
});

Route::get('/shoping-cart', function () {
    return view('layouts.shoping-cart');
});


Route::get('/contact', function () {
    return view('layouts.contact');
});

/* -------- Pour le test ---------- */ 

Route::get('/nouvelle-arrivage', function () {
    return view('layouts.new-arrival');
});

Route::get('/actualite-blog', function () {
    return view('layouts.blog-page');
});

Route::get('/actualite-blog-detail', function () {
    return view('layouts.blog-page-detail');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/product-detail', function () {
    return view('layouts.product-detail');
});