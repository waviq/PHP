@extends('layouts.default')

@section('content')

<div class="jumbotron">
        <h1>Welcome to Larabook</h1>
        <p>Selamat di home page larabook, silahkan registrasi terlebih dahulu</p>
        
        <p>
            {{link_to_route('register_path','Sign Up',null,['class'=>'btn btn-lg btn-primary'])}}
          
        </p>
      </div>

@stop