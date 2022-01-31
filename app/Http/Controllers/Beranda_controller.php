<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beranda_controller extends Controller
{
    public function index() {
        $title = 'Beranda Admin';

        return view('beranda.beranda_index', compact('title'));
    }

    public function info() {
        $title = 'Tentang';

        return view('beranda.beranda_info', compact('title'));
    }
}
