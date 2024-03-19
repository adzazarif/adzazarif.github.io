<?php

namespace App\Http\Controllers;

use App\Http\Requests\BiodataRequest;
use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $data = Biodata::all();
        return view("layout.biodata",[
            "data"=> $data
        ]);
    }

    public function tambahBiodata()
    {
        return view("layout.tambah-biodata");
    }

    public function store(BiodataRequest $request)
    {
        Biodata::create([
            "NIM"=> $request->NIM,
            "nama_mhs"=> $request->nama,
            "prodi_mhs"=> $request->prodi,
            "alamat_mhs"=> $request->alamat,
            "notelp_mhs"=> $request->no_telp,
            "ttl_mhs"=> $request->tgl_lahir,
        ]);

        return redirect("/biodata")->with("success","Data berhasil di tambahkan");
    }
}
