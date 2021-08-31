<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }

    public function admin_daftar_pesanan(){
        return view("admin.daftar_pesanan");
    }

    public function admin_packing(){
        return view('admin.packing');
    }
    public function admin_dalam_pengantaran(){
        return view('admin.dalam_pengantaran');
    }
}
