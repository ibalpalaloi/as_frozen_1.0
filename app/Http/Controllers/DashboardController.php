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

    public function register(){
    	return view('register');
    }

    public function pesanan(){
        return view('pesanan');
    }

    public function get_produk_sub_kategori(Request $request){
        $sub_kategori = $request->sub_kategori;
        if($sub_kategori == "semua"){
            $view = view('sub_kategori_semua')->render();
        }elseif($sub_kategori == "ikan"){
            $produk = ['bakso1.jpg', 'bakso2.jpg', 'bakso3.jpg', 'bakso1.jpg', 'bakso2.jpg'];
            $view = view('bakso_ikan', compact('produk'))->render();
        }elseif($sub_kategori == "sapi"){
            $produk = ['daging1.jpg', 'daging2.jpg', 'daging3.jpg', 'daging4.jpg', 'daging1.jpg'];
            $view = view('bakso_ikan', compact('produk'))->render();
        }
        else{
            $produk = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg'];
            $view = view('bakso_ikan', compact('produk'))->render();
        }
        
        return response()->json(['html'=>$view]);
    }

}
