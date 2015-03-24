@extends('layouts.default')

@section('content')

<div>

    <h1>Post a Status</h1>

    @include('layouts.partials.errors')
    {{Form::open()}}

    <!--status form input-->
    <div class="form-group">
        {{Form::label('body','Status:')}}
        {{Form::textarea('body',null,['class'=>'form-control'])}}
    </div>

    <!--Submit input-->
    <div class="form-group">
        {{Form::submit('Post Status',['class'=>'btn btn-primary'])}}
    </div>


    {{Form::close()}}
    
    
    
    

</div>
@stop