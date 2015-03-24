@extends('layouts.default')

@section('content')

<div class="jumbotron">
        <h1>Welcome to Larabook</h1>
        <p>Selamat di home page larabook, silahkan registrasi terlebih dahulu</p>
        
<!--    Jika user TIDAK logout-->
        @if(! $penggunaSaatIni)
        <p>
            {{link_to_route('register_path','Sign Up',null,['class'=>'btn btn-lg btn-primary'])}}
        </p>
        @endif
      </div>

@stop