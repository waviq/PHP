@extends('layouts.default')

@section('content')
<h1>Login</h1>
{{ Form::open(['route' => 'login_path']) }}
<!--Email form input-->
<div class="form-group">
    {{Form::label('email','Email:')}}
    {{Form::email('email',null,['class'=>'form-control','required'=>'required'])}}
</div>

<!--Password form input-->
<div class="form-group">
    {{Form::label('password','Password:')}}
    {{Form::password('password',['class'=>'form-control','required'=>'required'])}}
</div>

<!--Sign In input-->
<div class="form-group">
    {{Form::submit('Sign In',['class'=>'btn btn-primary'])}}
</div>

{{Form::close()}}

@stop