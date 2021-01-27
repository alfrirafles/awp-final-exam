<?php

namespace App\Http\Controllers;

use App\Models\ProductLine;
use Illuminate\Http\Request;

class ProductLineController extends Controller
{
    public function browse(){
        return view('browse', [
            'productLines' => ProductLine::get()->toArray()
        ]);
    }
}
