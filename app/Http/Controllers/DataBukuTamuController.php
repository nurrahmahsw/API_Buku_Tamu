<?php

namespace App\Http\Controllers;
use App\ModelDataBukuTamu;
use Illuminate\Http\Request;

class DataBukuTamuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $data = ModelDataBukuTamu::all();
        return response($data);
    }

    public function tampil($id){
        $data = ModelDataBukuTamu::where('id',$id)->get();
        return response($data);
    }

    public function simpan(Request $request){
        
        $data = new ModelDataBukuTamu();
        
        $data->nama = $request->input('nama');
        $data->alamat = $request->input('alamat');
        $data->kontak = $request->input('kontak');
        $data->keperluan = $request->input('keperluan');
        $data->save();

        return response('Data Berhasil Disimpan!');
    }

    public function ubah(Request $request, $id){
        $data = ModelDataBukuTamu::where('id',$id)->first();

        $data->nama = $request->input('nama');
        $data->alamat = $request->input('alamat');
        $data->kontak = $request->input('kontak');
        $data->keperluan = $request->input('keperluan');
        $data->save();
    
        return response(' Data Berhasil Diubah!');
    }
    
    public function hapus($id){
        $data = ModelDataBukuTamu::where('id',$id)->first();
        $data->delete();
    
        return response('Data Berhasil Dihapus!');
    }
    

    //
}
