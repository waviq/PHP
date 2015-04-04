@extends('layouts.master')
<!-- Mendefinisikan Blade Layout -->

@include('layouts.partials.alert')

        <div class="uk-navbar-flip uk-navbar-content">
            <a class="" href="{{URL::to('login')}}">Login</a>|
            <a class="" href="#">Daftar</a>

        </div>

   