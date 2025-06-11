@extends('layouts.master')
@section('title')
    Halaman Dashboard
@endsection

@section('content')
    
<h1>Selamat Datang {{$fullname}}</h1>
<p>Biodata anda : {{$biodata}} </p>
@endsection