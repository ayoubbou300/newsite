<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\itemid;
use App\Models\Categorie;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    $items = Item::take(4)->get();
    
    
    $produits = Item::where('Type','Produit')->take(4)->get();
    $services = Item::where('Type','Service')->take(4)->get();

    return view('welcome',['items'=>$items,'produits'=>$produits,'services'=>$services]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [itemid::class,'index'])->name('dashboard');
});
Route::get('/additems',[itemController::class,'create'])->name('items');
Route::Post('/additems',[itemController::class,'store'])->name('additems');
Route::get('/arrayitems', function () {
    $items = Item::where('user_id',Auth::user()->id)->get();
    $categories = Categorie::all();
    return view('arrayitems',['items'=>$items,'categories'=>$categories]);

})->name('arrayitems');
Route::DELETE('/deleteitem/{id}',[itemController::class,'destroy'])->name('deleteitems');
Route::get('/edititem/{id}',[itemController::class,'edit'])->name('edititem');
Route::put('/edititem/{id}',[itemController::class,'update'])->name('updateitem');
route::post('/search',[itemController::class,'search'])->name('searchitem');