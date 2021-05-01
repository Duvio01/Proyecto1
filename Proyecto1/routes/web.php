<?php

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
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

Route::get('pruebaProductos', function () {
    //return view('welcome');
    /* //select
    $productos = Product::where('available', true)->get();
    foreach($productos as $producto) {
        echo($producto->description);
        echo("<br>");
    } */

    /* //insert
    $nuevoProducto = new Product();
    $nuevoProducto->name = "iPhone 13 super pro max";
    $nuevoProducto->price = 10000000;
    $nuevoProducto->description = "lo mismo mas caro";
    $nuevoProducto->save(); */

    /* //update
    $iphone13= Product::find(51);
    $iphone13->price = 16800000;
    $iphone13->save();
    dd($iphone13); */

    /* //delete
    $iphone13 = Product::find(51);
    $iphone13->delete();
    dd($iphone13); */

   /*  $categories = Product::find(1);

    dd($categories->categories);
 */
    /* $product = Category::find(3);

    dd($product->products); */

   /*  $image = Product::find(3);

    dd($image->images()->get()); */
});
