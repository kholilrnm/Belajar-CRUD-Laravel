<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $nilai = 'Ini String Dibuka dari Array ';
        return view('dashboard/dashboard', ['nilai' => $nilai]);
    }

    public function show($id)
    {
        $nilai = 'ini adalah nilainya ' . $id;
        $users = "Kholilul Rachman NM";
        $dataArray = ['ini array : kholil', 'ul', 'rachman', 'nur','manab'];
        $unescaped = '<script>alert("x")</script>';
        $unescaped123 = '<script>alert("x")</script>';

        return view('dashboard/show', ['nilai' => $nilai, 'users' => $users, 'dataArray' => $dataArray, 'unescaped' => $unescaped, 'unescaped123' => $unescaped123]);
    }
}
