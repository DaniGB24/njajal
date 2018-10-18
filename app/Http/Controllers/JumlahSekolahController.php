<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JumlahSekolah;

class JumlahSekolahController extends Controller
{
     public function index()
    {
     $jumlah = JumlahSekolah::all();
     return $jumlah;
    }
}
