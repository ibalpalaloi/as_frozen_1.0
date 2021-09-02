<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function flash_sale(){
    	return view('flash_sale');
    }

    public function kategori(){
    	return view('kategori');
    }

    public function keranjang(){
    	return view('keranjang');
    }

    public function login(){
    	return view('login');
    }

    public function checkout(){
        return view('checkout');
    }

    public function register(){
    	return view('register');
    }

    public function pesanan(){
        return view('pesanan');
    }

    public function get_produk_sub_kategori(Request $request){
        $sub_kategori = $request->sub_kategori;
        $view = view('bakso_ikan')->render();
        return response()->json(['html'=>$view]);
    }

}
