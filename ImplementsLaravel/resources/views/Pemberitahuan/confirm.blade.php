@extends('app')

@section('content')
    <h1 class="page-heading">Confirm</h1>

    {!! Form::open(['action' => 'PemberitahuanController@store']) !!}
        <!--Template form input-->
        <div class="form-group">
            {!! Form::textarea('template', $template,['class'=>'form-control']) !!}
        </div>

    <!-- Button Submit-->
    <div class="form-group">
        {!! Form::submit('Kirim Pelaporan Sekarang', ['class' =>'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@endsection