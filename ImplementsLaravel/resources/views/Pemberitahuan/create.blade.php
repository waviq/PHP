@extends('app')

@section('content')
    <h1 class="page-heading">Prepare a DMCA Notice</h1>

    {!! Form::open() !!}
    
        <!--Provider_id form input-->
        <div class="form-group">
            {!! Form::label('provider_id','kirim laporan ke:') !!}
            {!! Form::select('provider_id', [], null,['class'=>'form-control']) !!}
        </div>

        <!--Judul_pelanggaran form input-->
        <div class="form-group">
            {!! Form::label('judul_pelanggaran','Content yang di langgar') !!}
            {!! Form::text('judul_pelanggaran',null,['class'=>'form-control']) !!}
        </div>
    
        <!--Link_pelanggaran form input-->
        <div class="form-group">
            {!! Form::label('link_pelanggaran','Link contentnya') !!}
            {!! Form::text('link_pelanggaran',null,['class'=>'form-control']) !!}
        </div>
    
        <!--Link_asli form input-->
        <div class="form-group">
            {!! Form::label('link_asli','Link content oroginal dari server') !!}
            {!! Form::text('link_asli',null,['class'=>'form-control']) !!}
        </div>

        <!--Deskripsi form input-->
        <div class="form-group">
            {!! Form::label('deskripsi','Deskripsi informasi lengkapnya') !!}
            {!! Form::text('deskripsi',null,['class'=>'form-control']) !!}
        </div>
    
        <!--preview Button Submit-->
        <div class="form-group">
            {!! Form::submit('preview', ['class' =>'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@endsection