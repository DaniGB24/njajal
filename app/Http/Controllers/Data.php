<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sekolah;

class Data extends Controller
{
     

     public function index()
    {
     $sekolah = Sekolah::all();
     return view('welcome')->with('nama', $sekolah);
     // return $sekolah;
    }

 //        public function namasekolah()
 //    {
 //        // $sekolah = Order::where('ambil', false)->orderBy('id', 'ASC')->get();
 //        // return view('pages.admin.dashboard')->with('orders', $data);
 //        // $sekolah = Transaksi::with(['customer', 'barang'])->orderBy('nomor_transaksi', 'DESC')->get();
 //        // return view('pages.welcome')->with('data', $data);
 //        $namasekolah = Sekolah::all();
 //        // return view('pages.welcome')->with('nama', $namasekolah);
 //        return $namasekolah;
       
 //    }

 //    public function find($id)
 //    {
 //    	$sekolah = Sekolah::find($id);
 //    	return $sekolah;
 //    }

 //    public function post(Request $req)
 //    {
 //    	$sekolah = new Sekolah;
 //    	$sekolah->nama_sekolah = 'SMA BEngkulu';
 //    	$sekolah->npsn = 'asdsad';
 //    	$sekolah->jenjang = 'SMA';
 //    	$sekolah->status_sekolah = 'Negeri';
 //    	$success = $sekolah->save();
 //    	return $success;
 //    }

	// public function post(Request $req, $id)
 //    {
 //    	$sekolah = Sekolah::find($id);
 //    	$sekolah->nama_sekolah = 'SMA BEngkulu asd';
 //    	$sekolah->npsn = 'asdsad fsda';
 //    	$sekolah->jenjang = 'SMA asdasd';
 //    	$sekolah->status_sekolah = 'Negeri';
 //    	$success = $sekolah->save();
 //    	return $success;
 //    }

 //    public function destroy($id)
 //    {
 //    	$success = Sekolah::delete();
 //    	return $success;
 //    }

}
