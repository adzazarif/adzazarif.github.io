<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $data = [
        [
            "name"=> "Adza Zarif Nur Iskandar",
            "email"=> "adzazarif@gmail.com",
            "address"=> "Blitar"
        ],
        [
            "name"=> "Wahyu Atmara",
            "email"=> "wahyu@gmail.com",
            "address"=> "Blitar"
        ],
        [
            "name"=> "Raffi Prabowo",
            "email"=> "raffi@gmail.com",
            "address"=> "Blitar"
        ]
        ];
    public function index()
    {
        return view("layout.user", [
            "data"=> $this->data
        ]);
    }

    public function store(Request $request)
    {
        dd($request->all());
        $arr = [
            "name"=> $request->name,
            "email"=> $request->email,
            "address"=> $request->address
        ];
        array_push($this->data, $arr);
        return view("layout.user")->with("data", $this->data)->with("success","Data berhasil ditambahkan");
    }

    public function getDetail($name, $email, $address)
    {
        $data = [
            "name"=> $name,
            "email"=> $email,
            "address"=> $address
        ];
        return view('layout.detail-user', [
            "data"  => $data 
        ]);
    }

    public function unauthorized()
    {
        return view("authentication.eror-unauthorized");
    }
}
