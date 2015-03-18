@extends('layouts.defaultCustomers')

@section('content')
<h1>Create new Member</h1>

{{Form::open(['route'=>'customers.store'])}}

<div>
    {{Form::label('nama','Nama Anda :')}}
    {{Form::text('nama')}}
    {{$errors->first('nama','<span class error>Nama harus di isi</span>')}}
</div>
<div>
    {{Form::label('alamat','alamat Anda :')}}
    {{Form::text('alamat')}}
    {{$errors->first('alamat','<span class error>Alamat harus di isi</span>')}}
</div>
<div>
    {{Form::submit('Register')}}
    
</div>

{{Form::close()}}

@stop