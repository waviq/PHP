@extends('layouts.default')

@section('content')

<div class="row">
    
    
    
    <div class="col-md-6 col-md-offset-3">

        @include('statuses.partials.publish-status-form')
        


        <!--    Statuses di ambil dari StatusController@index();-->
        @foreach($statuses as $status)
            @include('statuses.partials.status')
        @endforeach


    </div>
    
</div>
@stop