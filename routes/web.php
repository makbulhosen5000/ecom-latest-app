<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Brand List
Route::get('/brandList',[BrandController::class,'brandList']);

//Category List
Route::get('/categoryList',[CategoryController::class,'categoryList']);

//Product List By Category
Route::get('/listProductByCategory/{id}',[ProductController::class,'listProductCyCategory']);

//Product List By Brand
Route::get('/listProductByBrand/{id}',[ProductController::class,'listProductByBrand']);

//Product List By Remark
Route::get('/listProductByRemark/{remark}',[ProductController::class,'listProductByRemark']);

//Product List Slider
Route::get('/listProductSlider',[ProductController::class,'listProductSlider']);

//Product Details
Route::get('/productDetailsById/{id}',[ProductController::class,'productDetailsById']);
Route::get('/listReviewByProduct/{product_id}',[ProductController::class,'listReviewByProduct']);

//policy
Route::get('/policyByType/{type}',[PolicyController::class,'policyByType']);