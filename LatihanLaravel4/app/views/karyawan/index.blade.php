@extends('layouts.default')

@section('content')
    <h1>Daftar Karyawan</h1>
    
<!--    fungsi if berfungsi : cek d DB jika gak ada user di DB, maka kasih keterangan-->


    @if($user->count())
        @foreach($user as $karyawan)
        <!--biar ada link nya-->
        <li>{{link_to("/karyawan/{$karyawan->nama}",$karyawan->nama)}}</li>

        <!--<li>{{$karyawan->nama}}</li>-->
        @endforeach
    @else
    <p>Gak ada user d database</p>
        
    @endif

@stop
