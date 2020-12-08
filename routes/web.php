<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreController;
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
//GET
//POST
//PUT
//DELETE
//PATCH
//OPTIONS

Route::get('/', function () {
    $hello = "Hello World";
    return view('welcome', ['hello' => $hello]);
});

Route::prefix('stores')->namespace('Admin')->name('admin.stores.')->group(function () {

    Route::get('/', [StoreController::class, 'index'])->name('index');
    Route::get('/create', [StoreController::class,'create'])->name('create');
    Route::post('/viewStore', [StoreController::class, 'store'])->name('store');
    Route::get('/edit/{store}', [StoreController::class, 'edit'])->name('edit');
    Route::post('/update/{store}', [StoreController::class, 'update'])->name('update');
    Route::get('/delete/{store}',[StoreController::class, 'delete'])->name('delete');

});


 // Route::get('/createStore', function () {
//     //Create Store
//     $user = App\Models\User::find(10);
//     $store = $user->store()->create([
//         'name' => 'Americanas',
//         'description' => 'Tudo o que você precisa tem nas americanas',
//         'phone' => '35062279',
//         'mobile_phone' => '13981512040',
//         'slug' => 'Lojas-Americanas'
//     ]);

//     return $store;
// });
// Route::get('createProduct', function () {
//     $store = App\Models\Store::find(41);
//     $product = $store->products()->create([
//         'name' => 'TV',
//         'description' => 'TV SAMSUNG',
//         'body' => '45 P',
//         'price' => '1000.00',
//         'slug' => 'tv'
//     ]);
//     return $product;
// });



// Route::get('createCategory', function () {
//      App\Models\Category::create([
//         'name'=>'Games',
//         'description'=>null,
//         'slug'=>'games',
//     ]);
//      App\Models\Category::create([
//         'name'=>'Musics',
//         'description'=>null,
//         'slug'=>'musics',
//     ]);
    
//     return App\Models\Category::all();
// });

// Route::get('addProduct',function(){
//     $product = App\Models\Product::find(49);
//     // dd($product->categories()->sync([2]));
//     return $product->categories; 
// });

// Route::get('/model', function () {
//     //$products = \App\Models\Product::all(); //select * from products
//     // $user = new App\Models\User();
//     // $user->name = 'Teste';
//     // $user->email = 'teste@hotmail.com';
//     // $user->password = bcrypt('12345678');

//     // $user = App\Models\User::find(4);
//     // dd($user->store()->count()); //Retorna o objeto unico

//     // $loja = App\Models\Store::find(1);    
//     // return $loja->products()->where('id',1)->get(); 

//     // $category = App\Models\Category::find(1);
//     // $category->products;

//     // $allUser = App\Models\User::all();
//     //  return $allUser;

//     //return $products;



// });
