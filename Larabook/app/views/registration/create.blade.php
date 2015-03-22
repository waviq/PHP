@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-6">

        <h1>Register !</h1>

        @include('layouts.partials.errors')

        {{Form::open(['route'=>'register_path'])}}

        <!--username form input-->
        <div>
            {{Form::label('username','Username:')}}
            {{Form::text('username',null,['class'=>'form-control'])}}

        </div>

        <!--Email form input-->
        <div>
            {{Form::label('email','Email:')}}
            {{Form::text('email',null,['class'=>'form-control'])}}
        </div>

        <!--Password form input-->
        <div>
            {{Form::label('password','Password:')}}
            {{Form::password('password',['class'=>'form-control'])}}
        </div>

        <!--password confirmation form input-->
        <div>
            {{Form::label('password_confirmation','Password Confirmation:')}}
            {{Form::password('password_confirmation',['class'=>'form-control'])}}
        </div>

        <!--Button-->
        <div class="form-group">
            <br>
            {{Form::submit('Sign Up',['class'=>'btn btn-primary'])}}
        </div>

        {{Form::close()}}

    </div>
</div>
@stop