<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('dashboard/dashboard');
    }

    public function show($id)
    {
        $nilai = 'ini adalah nilainya ' . $id;
        $users = "Kholilul Rachman NM";
        $dataArray = ['ini array : kholil', 'rachman', 'nm'];
        return view('dashboard/show', ['nilai' => $nilai, 'users' => $users, 'dataArray' => $dataArray]);
    }
}
