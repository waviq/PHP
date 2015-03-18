@extends('layouts.defaultCustomers')

@section('content')
<h1>Nama customers</h1>

@foreach($nama as $customers)
<li>{{$customers->nama}}</li>
@endforeach


@stop