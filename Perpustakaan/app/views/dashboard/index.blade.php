@extends('layouts.master')
@section('title')

{{--title berasal dari HomeController--}}
    {{ $judul }}
    @stop

    @section('nav')
        <li><a href="#">Buku</a></li>
        <li><a href="#">Member</a></li>
        <li><a href="#">Peminjaman</a></li>
    @stop

    @section('breadcrumb')

    @stop

    @section('content')
    Selamat datang di Menu Administrasi Larapus. Silahkan pilih menu administrasi yang di inginkan.
    
    
@stop