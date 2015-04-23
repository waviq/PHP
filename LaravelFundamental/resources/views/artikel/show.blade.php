@extends('aplikasi')

@section('konten')

    <h1>{{$artikel->title}}</h1>

    <hr />

    <article>
        {{$artikel->body}}
    </article>

@stop