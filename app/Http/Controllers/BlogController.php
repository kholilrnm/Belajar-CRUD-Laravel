<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function index()
    {
        $nilai = 'Ini String Dibuka dari Array ';
        return view('dashboard/dashboard', ['nilai' => $nilai]);
    }

    public function show($id)
    {
        // variabel(A) = nilai variabel(B) -> nek kate dilebokno return nak view dadi -> (C) => (A) DI DALEM blade viewnya pake echo yg (C)
        $nilai = 'ini adalah nilainya ' . $id;
        $users = "Kholilul Rachman NM";
        $dataArray = ['ini array : kholil', 'ul', 'rachman', 'nur','manab'];
        $unescaped = '<script>alert("x")</script>';
        $unescaped123 = '<script>alert("x")</script>';
        $tes = '<br>';
        
        // Insert Data
        // DB::table('users')->insert([
        //     'username' => 'Dayle', 
        //     'password' => '12345'
        // ]);
        // ========================= //

        // Update Data
        // DB::table('users')->where('username', 'Kholil')->update([
        //     'username' => 'Kholilul Rachman NM', 
        //     'password' => '123456789'
        // ]);
        
        // ========================= //
        // Delete Data
        // DB::table('users')->where('id', '>', 3)->delete();

        // Read Data
        $ambilData = DB::table('users')->get();
        $ambilDataWhere = DB::table('users')->where('username', 'like','K%')->get();
        // metode debug pake helper dd(nama variabel) -> buat cek kayak vardump bos di laravel

        // dd($ambilDataWhere);

        // ========================= //


        return view('dashboard/show', ['nilai' => $nilai,
                                        'users' => $users, 
                                        'dataArray' => $dataArray, 
                                        'unescaped' => $unescaped, 
                                        'unescaped123' => $unescaped123,
                                        'getUsersDB' => $ambilData,
                                        'tes' => $tes,
                                        'ambildata' => $ambilDataWhere
                                        ]);
    }
}
