<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function index()
    {

        $product = Products::all();
        return view("layouts.master_frontend", compact('product'));

    }
}
