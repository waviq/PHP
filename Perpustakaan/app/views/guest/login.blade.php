@extends('layouts.master')

@section('content')

<div class="uk-text-center">
    <div class="uk-vertical-align-middle" style="width: 250px;">
        
        {{Form::open(array('url' =>'/authenticate','class'=>'uk-panel uk-panel-box uk-form'))}}
        <!--Email form input-->
        <div class="uk-form-row">
            {{ Form::text('email', null, array('class'=>'uk-width-1-1 uk-form-large','placeholder'=>'Email')) }}
        </div>
        
        <!--Password form input-->
        <div class="uk-form-row">
            {{ Form::password('password', array('class'=>'uk-width-1-1 uk-form-large','placeholder'=>'Password')) }}
        </div>
        
        <!--Submit form input-->
        <div class="uk-form-row">
            {{ Form::submit('Login', array('class'=>'uk-width-1-1 uk-button uk-button-primary uk-button-large')) }}
        </div>
        
        {{Form::close()}}
        
    </div>
    
</div>
@stop