<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Biodata::all();
        return view("home.index",[
            "data"=> $data
        ]);
    }
}
