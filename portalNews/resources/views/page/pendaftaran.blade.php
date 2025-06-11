@extends('layouts.master')
@section('title')
    Halaman Pendaftaran
@endsection
@section('content')
    
<a href="/">Kembali</a>
<form action="/welcome" method="POST">
    @csrf
    <label >Full Name</label> <br>
    <input type="text" name="fname" > <br> <br>
    
    <label >Biodata</label> <br>
    <textarea name="bio"></textarea> <br> <br>

    <input type="submit" value="Kirim"/>
</form>
@endsection