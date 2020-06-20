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

@endsection
