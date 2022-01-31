<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_buku;
use App\Exports\CsvExport;
use Maatwebsite\Excel\Facades\Excel;


class Buku_controller extends Controller
{
    public function index() {
        $title = 'Data Buku';

        // $data = \DB::table('m_buku as b')->join('m_kategori as k','b.kategori','=','k.id')->select('b.gambar','b.judul','k.nama','b.penulis','b.stock','b.created_at','b.id')->get();
        $data = M_buku::paginate(10);
        return view('buku.buku_index',compact('title','data'));
    }

    public function add() {
        $title = 'Tambah Buku';

        $kategori = \DB::table('m_kategori')->get();

        return view('buku.buku_add',compact('title','kategori'));
    }

    public function store(Request $request) {
        $judul = $request->judul;
        $keterangan = $request->keterangan;
        $stock = $request->stock;
        $kategori = $request->kategori;
        $penulis = $request->penulis;
        
        $file = $request->file('image');
 
        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
 
        // Query untuk insert data
        \DB::table('m_buku')->insert([
            'kategori'=>$kategori,
            'judul'=>$judul,
            'keterangan'=>$keterangan,
            'stock'=>$stock,
            'penulis'=>$penulis,
            'gambar'=>$file->getClientOriginalName(),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        \Session::flash('sukses','Data Buku berhasil ditambahkan');
 
        return redirect('master/buku');
    }

    public function edit($id){
        $title = 'Edit Buku';
        $dt = \DB::table('m_buku')->where('id',$id)->first();
        $kategori = \DB::table('m_kategori')->get();
 
        return view('buku.buku_edit',compact('title','dt','kategori'));
    }
 
    public function update(Request $request,$id){
        $judul = $request->judul;
        $keterangan = $request->keterangan;
        $stock = $request->stock;
        $kategori = $request->kategori;
        $penulis = $request->penulis;
 
        $file = $request->file('image');
 
        if($file){
            \DB::table('m_buku')->where('id',$id)->update([
                'kategori'=>$kategori,
                'judul'=>$judul,
                'keterangan'=>$keterangan,
                'stock'=>$stock,
                'penulis'=>$penulis,
                'gambar'=>$file->getClientOriginalName(),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
 
            //Move Uploaded File
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
        }else{
            \DB::table('m_buku')->where('id',$id)->update([
                'kategori'=>$kategori,
                'judul'=>$judul,
                'keterangan'=>$keterangan,
                'stock'=>$stock,
                'penulis'=>$penulis,
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }
 
        \Session::flash('sukses','Buku berhasil di update');
 
        return redirect('master/buku');
    }

    public function delete($id){
        \DB::table('m_buku')->where('id',$id)->delete();
 
        \Session::flash('sukses','Data buku berhasil dihapus');
        return redirect('master/buku');
    }


    public function csv_export() {
        return Excel::download(new CsvExport, 'databuku.csv');
    }

}