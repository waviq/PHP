@extends('aplikasi')

@section('konten')

    @if($jeneng == 'Waviq Subhi')

        <h1>About :{{$jeneng}} </h1>
        Waviq subhi itu orang e baik hati dan suka menolong
    @else
        <h1>About :Saya gak punya nama </h1>
    @endif

    {{--Penggunaan @foreach--}}
    {{--
        <h3>Nama :</h3>
            <ul>
                @foreach($namaNama as $names)
                    <li>{{$names}}</li>
                @endforeach
            </ul>
    --}}

@stop

