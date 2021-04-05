<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DashboardController extends Controller
{
   
    public function index(){
        return view('backend.dashboard');
    }
    public function kategori(){
        return view('backend.kategori');
    }
    
    public function barang(){
        return view('backend.barang');
    }

    public function kurir(){
        return view('backend.kurir');
    }

    public function pelanggan(){
        return view('backend.pelanggan');
    }

    public function user(){
        return view('backend.user');
    }
    public function data_pengiriman(){
        return view('backend.data_pengiriman');
    }
    public function tambah_kategori(){
        return view('backend.tambah_kategori');
    }
}
