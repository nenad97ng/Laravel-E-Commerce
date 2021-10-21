<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //Data for product view
    function index()
    {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    //Data for detail view
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
}
