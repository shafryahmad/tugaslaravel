<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama_sekolah'  => 'SMKN 1 Slawi',
            'alamat'        => 'JL. Gajah Mada'
        ];
        return view('layout.v_home', $data);
    }
    public function about($id)
    {
        return 'Ini Halaman About' . $id;
    }
}
