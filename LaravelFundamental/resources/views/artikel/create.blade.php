@extends('aplikasi')

@section('konten')

    <h1>Create Form</h1>

    {!! Form::open(['url'=>'artikel']) !!}

        @include('artikel.partials.Form',['namaTombol' => 'Add Artikel'])

    {!! Form::close() !!}

    @include('artikel.partials.errorMessage')

@stop
