@extends('aplikasi')

@section('konten')

    <h1>{{$artikel->title}}</h1>

    <hr/>

    <article>
        {{$artikel->body}}
    </article>

    @unless($artikel->kategori->isEmpty())
        <h5>Kategori</h5>
        <ul>
            @foreach($artikel->kategori as $kategori)
                <li>{{$kategori->namaKategori}}</li>
            @endforeach
        </ul>
    @endunless

@stop