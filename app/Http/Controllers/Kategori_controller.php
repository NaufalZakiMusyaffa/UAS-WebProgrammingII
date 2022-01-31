<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kategori_controller extends Controller
{
    public function index(){
        $title = 'Data Kategori';

        //untuk menampung data kategori
        $data = \DB::table('m_kategori')->paginate(10);

        //Di arahkan ke View kategori_index
        return view('kategori.kategori_index',compact('title','data'));
    }

    public function add() {
        $title = 'Tambah Kategori';

        //Di arahkan ke View kategori_add
        return view('kategori.kategori_add',compact('title'));
    }

    // Mengambil nilai dari inputan -> tambahkan parameter request
    public function store(Request $request) {
        $nama = $request->nama;

        //Jalankan Query Insert Datanya
        \DB::table('m_kategori')->insert([
            'nama'=>$nama,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);

        \Session::flash('sukses','Data Kategori ditambahkan');

        return redirect('master/kategori');
    }

    public function edit($id) {
        $title = 'Edit Kategori';

        // Mengambil Data
        $dt = \DB::table('m_kategori')->where('id',$id)->first();

        return view('kategori.kategori_edit',compact('title','dt'));
    }

    public function update(Request $request,$id) {
        $nama = $request->nama;

        //Query Update Datanya
        \DB::table('m_kategori')->where('id',$id)->update([
            'nama'=>$nama,
            'updated_at'=>date('Y-m-d H:i:s')
        ]);

        \Session::flash('sukses','Data Kategori berhasil di Update');

        return redirect('master/kategori');
    }

    public function delete($id) {
        // Query Delete Datanya
        \DB::table('m_kategori')->where('id',$id)->delete();

        \Session::flash('sukses','Data Kategori berhasil di Hapus');

        return redirect('master/kategori');

    }
}
