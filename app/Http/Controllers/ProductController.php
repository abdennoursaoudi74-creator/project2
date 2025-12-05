<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\index;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        $produits = DB::table("produits")->get();
        $logo = DB::table("logo")->get();
        return view("product.index", compact("produits", "logo"));
    }
    public function detail($id)
    {
        if (Auth::user() != null) {
            $produit = DB::table("produits")->find($id);
            return view("product.detail", compact("produit"));
        } else
            return redirect('/login');
    }
}
