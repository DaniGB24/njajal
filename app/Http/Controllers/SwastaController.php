<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataSwasta;

class SwastaController extends Controller
{
    
     public function index()
    {
     $sekolahswasta = DataSwasta::all();
     return $sekolahswasta;
    }
}
