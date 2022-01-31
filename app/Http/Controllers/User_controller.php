<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_controller extends Controller
{
    public function index(){
        $title = 'Data User';

        //untuk menampung data kategori
        $data = \DB::table('users')->get();

        //Di arahkan ke View kategori_index
        return view('user.user_index',compact('title','data'));
    }
}
