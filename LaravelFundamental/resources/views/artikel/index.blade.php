@extends('aplikasi')

@section('konten')

    <h1>Artikel</h1>

    <hr />

    @foreach($artikel as $artikels)
        <article>
            <h2>
                <a href="/artikel/{{$artikels->id}}">{{$artikels->title}}</a>
            </h2>
            <div class="body">{{$artikels->body}}</div>
        </article>
    @endforeach

@stop