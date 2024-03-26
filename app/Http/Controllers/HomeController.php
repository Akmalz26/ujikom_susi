<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class HomeController extends Controller
{
    public function index()
    {
        //get all produks from Models
        $produks = Produk::latest()->get();

        //return view with data
        return view('home', compact('produks'));
    }

    public function shop()
    {
        //get all produks from Models
        $produks = Produk::latest()->get();

        //return view with data
        return view('shop', compact('produks'));
    }

    public function detail_produk($id)
    {
        $produk = Produk::where('id', $id)->first();
        
        return view('frontend.detail-produk',  compact('produk'));
    }
}
