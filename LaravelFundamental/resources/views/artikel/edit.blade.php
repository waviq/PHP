@extends('aplikasi')

@section('konten')

    <h1>Edit: {!! $artikel->title !!}</h1>

    {!! Form::model($artikel,['method' => 'PATCH', 'action' => ['ArtikelController@update', $artikel->id]]) !!}

    @include('artikel.partials.Form', ['namaTombol' => 'Update'])


    {!! Form::close() !!}

    @include('artikel.partials.errorMessage')

@stop
