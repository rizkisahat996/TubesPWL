@extends('layouts.main')

@section('container')
    <h1>Halaman Home</h1>
@auth
    <h3>Halo {{ auth()->user()->name }}, Selamat Datang Kembali</h3>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="300" class="img-thumbnail rounded-circle">
@endauth
@endsection