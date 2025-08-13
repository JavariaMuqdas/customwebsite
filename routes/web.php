<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Session;

Route::get('/register', function () {
    return view('register'); 
});

Route::get('/login', function () {
    return view('login');
})->middleware(UserAuth::class);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);

Route::get('/', [ProductController::class, 'index']);
Route::get("/detail/{id}", [ProductController::class, 'detail']);
Route::get("/detail/{id}", [ProductController::class, 'detail']);
Route::get("search", [ProductController::class, 'search']);
Route::post("Add_to_cart", [ProductController::class, 'AddToCart']);
Route::get("/cartlist", [ProductController::class, 'cartList']);
Route::get('/remove_cart/{id}', [ProductController::class, 'removeCart']);
Route::get('/ordernow', [ProductController::class, 'orderNow']);
Route::post('/orderplace', [ProductController::class, 'orderPlace']);
Route::get('/myorder', [ProductController::class, 'myOrder']);
