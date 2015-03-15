@extends('layouts.master')

@section('asset')
    @include('layouts.partials.datatable')
@stop

@section('title')
    {{ $title }}
@stop

@section('title-button')
    {{ HTML::buttonAdd() }}
    <a class="uk-button uk-button-primary" href="{{ route('admin.books.export') }}">Export</a>
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li class="uk-active">{{ $title }}</li>
@stop

@section('content')

    {{ Datatable::table()
    ->addColumn('id','title', 'author', 'amount', 'stock', '')
    ->setOptions('aoColumnDefs',array(
        array(
            'bVisible' => false,
            'aTargets' => [0]),
        array(
            'sTitle' => 'Judul',
            'aTargets' => [1]),
        array(
            'sTitle' => 'Jumlah',
            'aTargets' => [2]),
        array(
            'sTitle' => 'Stok',
            'aTargets' => [3]),
        array(
            'sTitle' => 'Penulis',
            'aTargets' => [4]),
        array(
            'bSortable' => false,
            'aTargets' => [5])
        ))
    ->setOptions('bProcessing', true)
    ->setUrl(route('admin.books.index'))   // this is the route where data will be retrieved
    ->render('datatable.uikit') }}

@stop