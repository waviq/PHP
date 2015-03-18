@extends('layouts.default')

@section('content')
<h1>Create new User</h1>

{{Form::open(['route'=>'karyawan.store'])}}
<div>
    {{Form::label('nama','Nama Anda :')}}
    {{Form::text('nama')}}
    {{$errors->first('nama')}}
</div>

<div>
    {{Form::label('password','Password anda :')}}
    {{Form::password('password')}}
    {{$errors->first('password')}}
</div>

<div>
    {{Form::label('alamat','Alamat Anda :')}}
    {{Form::text('alamat')}}
    {{$errors->first('alamat')}}
</div>

<div>
    {{Form::submit('Create User')}}
    
</div>
{{Form::close()}}


@stop  
