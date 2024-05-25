<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $pegawai = Pegawai::with('Admin')->get();
    	// mengirim data pegawai ke view index
    	return view('layout/pegawai',compact('pegawai'));
 
    }

    public function tambahpegawai()
    {
    	// mengambil data dari table pegawai
    	
        $pegawai=Pegawai::all();
    	// mengirim data pegawai ke view index
    	return view('layout/tambahpegawai',compact('admin'));
 
    }

    public function insertdata4(Request $request)
    {
       
       
        
        // mengambil data dari table pegawai
    	Pegawai::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('pegawai');
 
    }

    public function ubahpegawai($id)
    {
    	// mengambil data dari table pegawai
        $pegawai = Pegawai::find($id);
        $admin=Admin::all();
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahpegawai',compact('pegawai','admin'));
 
    }

    public function updatedata4(Request $request, $id)
    {
    	// mengambil data dari table pegawai
        $pegawai = Pegawai::find($id);
        $pegawai->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('pegawai');
 
    }

    public function deletepegawai($id)
    {
    	// mengambil data dari table pegawai
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('pegawai');
 
    }

    public function eksporpegawai()
    {
    	// mengambil data dari table pegawai
        $pegawai = Pegawai::with('Admin')->get();
        view()->share('pegawai',$pegawai);
        $pdf = PDF::loadview('layout/datapegawai-pdf');
        return $pdf->download('pegawai.pdf');
    	// mengirim data pegawai ke view index
    	
 
    }
}
