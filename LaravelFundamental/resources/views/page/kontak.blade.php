@extends('aplikasi')

@section('konten')

<h3>Nama :</h3>
<ul>
    @foreach($namaNama as $names)
        <li>{{$names}}</li>
    @endforeach
</ul>

@stop