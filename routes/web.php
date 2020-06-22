<?php

use App\Products;
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
Route::get('/add', function () {
    Products::create([
        'name' => 'Flamethrower',
        'sku'  => '1HJK92',
        'upc'  => 'SHNDUU451888',
        'description' => 'Not a Flamethrower',
        'search' => 1
    ]);
});
Route::get('/pr', function () {
    $product = Products::all(['attr.*']);
    return $product;


});
