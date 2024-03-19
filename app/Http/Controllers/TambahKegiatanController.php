<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahKegiatanController extends Controller
{
    public function index(){

        return view("tambahKegiatan");
    }
    public function BuktiMBKMindex(){

        return view("buktimbkm");
    }
}
