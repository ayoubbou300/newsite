<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\itemController;
use App\Models\Item;

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
    $items = Item::take(4)->get();

    return view('welcome',['items'=>$items]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {

        $items = Item::take(4)->get();
        // dd($items);



        return view('dashboard',['items'=>$items]);
    })->name('dashboard');
});
Route::get('/additems',[itemController::class,'create'])->name('items');
Route::Post('/additems',[itemController::class,'store'])->name('additems');
Route::get('/arrayitems', function () {
    $items = Item::all();
    return view('arrayitems',['items'=>$items]);

})->name('arrayitems');