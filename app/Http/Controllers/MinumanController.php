<?php

namespace App\Http\Controllers;
use App\Models\Minuman;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class MinumanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $minuman = Minuman::with('Admin')->get();
    	// mengirim data pegawai ke view index
    	return view('layout/minuman',compact('minuman'));
 
    }

    public function tambahminuman()
    {
    	// mengambil data dari table pegawai
    	
        $admin=Admin::all();
    	// mengirim data pegawai ke view index
    	return view('layout/tambahminuman',compact('admin'));
 
    }

    public function insertdata2(Request $request)
    {
       
       
        
        // mengambil data dari table pegawai
    	Minuman::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('minuman');
 
    }

    public function ubahminuman($id)
    {
    	// mengambil data dari table pegawai
        $minuman = Minuman::find($id);
        $admin=Admin::all();
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahminuman',compact('minuman','admin'));
 
    }

    public function updatedata2(Request $request, $id)
    {
    	// mengambil data dari table pegawai
        $minuman = Minuman::find($id);
        $minuman->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('minuman');
 
    }

    public function deleteminuman($id)
    {
    	// mengambil data dari table pegawai
        $minuman = Minuman::find($id);
        $minuman->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('minuman');
 
    }

    public function eksporminuman()
    {
    	// mengambil data dari table pegawai
        $minuman = Minuman::with('Admin')->get();
        view()->share('minuman',$minuman);
        $pdf = PDF::loadview('layout/dataminuman-pdf');
        return $pdf->download('minuman.pdf');
    	// mengirim data pegawai ke view index
    	
 
    }
}
