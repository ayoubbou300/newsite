<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class itemid extends Controller
{public function index()
    {
        //  = Item::all();
        return view('dashboard');
    }
}