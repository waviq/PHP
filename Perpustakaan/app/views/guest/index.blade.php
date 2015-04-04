
<!-- Menggunakan blade Layout -->


@extends('layouts.guest')

@section('content')
<h1 class="uk-heading-large">Daftar buku</h1>
<table class="uk-table uk-table-striped uk-table-hover">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Stok</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Kupinang engkau dengan hamdalah</td>
            <td>Mohammad fauzil adhim</td>
            <td>2/3</td>
            <td><a href="#">Pinjam buku</a></td>
        </tr>
        <tr>
            <td>Nikmatnya pacaran setelah menikah</td>
            <td>Salim A. Fillah</td>
            <td>1/3</td>
            <td><a href="#">Pinjam buku</a></td>
        </tr>
        <tr>
            <td>Cinta & seks rumah tangga muslim</td>
            <td>Aam Amiruddin</td>
            <td>1/3</td>
            <td><a href="#">Pinjam Buku</a></td>
        </tr>
            
    </tbody>
</table>

@stop