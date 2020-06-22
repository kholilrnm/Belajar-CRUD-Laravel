@extends('layouts.master')


@section('title', 'Blog Sekolah Koding')

@section('content')
    <h1>Hello Kholil Blog 1</h1>
    <h2>{{ $nilai }}</h2>
    <h2>{{ $users }}</h2>
    
    @foreach ($dataArray as $item)
        {{ $item }}
    @endforeach

    @if (count($dataArray) >= 5)
        <p> Usernya >= 5</p>
    @else
        <p> Usernya <= 5 </p>

    @endif

    <p>Perbedaan Echo di Laravel tanpa !! dan menggunakannya</p>
    <p>1. pake !! (mengekseskusi isi dari variabel nya)</p>
    {{!! $unescaped !!}}

    <p>2. tanpa !!</p>
    {{ $unescaped123 }}

    <p><br>Ini Data dari database crud_laravel</p>
    @foreach ($getUsersDB as $data)
        <li>{{ $data->username . $data->password }}</li>  {{-- bisa langsung di tag HTML --}}
        {!! $tes !!}

    @endforeach

    <p><br>Ambil data where database crud_laravel</p>
    @foreach ($ambildata as $data)
        <li>{{ $data->username . $data->password }}</li>  {{-- bisa langsung di tag HTML --}}
        {!! $tes !!}

    @endforeach

@endsection
