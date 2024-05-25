<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class CustomerController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
 $customer = Customer::all();
    	// mengirim data pegawai ke view index
    	return view('layout/customer',['customer'=>$customer]);
 
    }

    public function tambahcustomer()
    {
    	// mengambil data dari table pegawai
    	
 
    	// mengirim data pegawai ke view index
    	return view('layout/tambahcustomer');
 
    }

    public function insertdata5(Request $request)
    {
        Customer::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('customer');
        
        // mengambil data dari table pegawai
 
    	// mengirim data pegawai ke view index
    	
 
    }

    public function ubahcustomer($id)
    {
    	// mengambil data dari table pegawai
        $customer = Customer::find($id);
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahcustomer',compact('customer'));
 
    }

    public function updatedata5(Request $request, $id)
    {
    	// mengambil data dari table pegawai
        $customer = Customer::find($id);
        $customer->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('customer');
 
    }

    public function deletecustomer($id)
    {
    	// mengambil data dari table pegawai
        $customer = Customer::find($id);
        $customer->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('customer');
 
    }

    public function eksporcustomer()
    {
    	// mengambil data dari table pegawai
        $customer = Customer::all();
        view()->share('customer',$customer);
        $pdf = PDF::loadview('layout/datacustomer-pdf');
        return $pdf->download('customer.pdf');
    	// mengirim data pegawai ke view index
    	
 
    }
}
