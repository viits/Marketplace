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
    $hello = "Hello World";
    return view('welcome', ['hello' => $hello]);
});

Route::get('/model', function () {
    //$products = \App\Models\Product::all(); //select * from products
    // $user = new App\Models\User();
    // $user->name = 'Teste';
    // $user->email = 'teste@hotmail.com';
    // $user->password = bcrypt('12345678');

    $allUser = App\Models\User::all();
     return $allUser;

    //return $products;
});
