<?php

namespace App\Http\Controllers;

use App\Models\JenisSenjata;
use App\Models\Senjata;
use App\Models\StatusSenjata;
use Illuminate\Http\Request;

class AlutsistaController extends Controller
{
    //
    public function index()
    {
        // $senjata = Senjata::all();
        // dd($senjata);
        return view('admin.senjata.senjata',[
            'alutsistas' => Senjata::all()
        ]);
    }

    public function create()
    {
        return view('admin.senjata.tambah', [
            'jenis_senjatas' => JenisSenjata::all(),
            'status_senjatas' => StatusSenjata::all(),
        ]);
    }
}
