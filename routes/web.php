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
    $comics = config('db.comics');
    $list= config('db-footer.comics');
    $list_2= config('db-footer.info');
    $list_3= config('db-footer.sites');
    return view('home', compact ('comics', 'list', 'list_2', 'list_3'));
}) ->name('homepage');

Route::get('/{comic}', function ($id) {
    $list= config('db-footer.comics');
    $list_2= config('db-footer.info');
    $list_3= config('db-footer.sites');
    $products =config('db.comics');
    $product = $products [$id];
    return view('products.show', compact('product', 'list', 'list_2', 'list_3'));
    
}) -> name('products.show');