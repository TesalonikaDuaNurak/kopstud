<?php

namespace App\Http\Controllers;
use App\Models\Makanan;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class MakananController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $makanan = Makanan::with('Admin')->get();
    	// mengirim data pegawai ke view index
    	return view('layout/makanan',compact('makanan'));
 
    }

    public function tambahmakanan()
    {
    	// mengambil data dari table pegawai
    	
        $admin=Admin::all();
    	// mengirim data pegawai ke view index
    	return view('layout/tambahmakanan',compact('admin'));
 
    }

    public function insertdata(Request $request)
    {
       
       
        
        // mengambil data dari table pegawai
    	Makanan::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('makanan');
 
    }

    public function ubahmakanan($id_makan)
    {
    	// mengambil data dari table pegawai
        $makanan = Makanan::find($id_makan);
        $admin=Admin::all();
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahmakanan',compact('makanan','admin'));
 
    }

    public function updatedata(Request $request, $id_makan)
    {
    	// mengambil data dari table pegawai
        $makanan = Makanan::find($id_makan);
        $makanan->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('makanan');
 
    }

    public function deletemakanan($id_makan)
    {
    	// mengambil data dari table pegawai
        $makanan = Makanan::find($id_makan);
        $makanan->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('makanan');
 
    }

    public function ekspormakanan()
    {
    	// mengambil data dari table pegawai
        $makanan = Makanan::with('Admin')->get();
        view()->share('makanan',$makanan);
        $pdf = PDF::loadview('layout/datamakanan-pdf');
        return $pdf->download('makanan.pdf');
    	// mengirim data pegawai ke view index
    	
 
    }
}
