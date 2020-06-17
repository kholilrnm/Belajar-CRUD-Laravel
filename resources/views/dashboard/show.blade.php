@extends('layouts.master')


@section('title', 'Blog Sekolah Koding')

@section('content')
    <h1>Hello Kholil Blog 1</h1>
    <h2>{{ $nilai }}</h2>
    <h2>{{ $users }}</h2>
    @foreach ($dataArray as $item)
        {{ $item }}
    @endforeach

@endsection
