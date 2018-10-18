<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\JumlahSekolah;

class InputDataController extends Controller
{
    public function store(Request $request)
    {
    	# code...
    	$data=new JumlahSekolah;
    	$data -> jml_negeri =$request -> email;
    	$data -> jml_swasta =$request -> pass;

    	$data->save();
    	return redirect('/entry');
    }
}
