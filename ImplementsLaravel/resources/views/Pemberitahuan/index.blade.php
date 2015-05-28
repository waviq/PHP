@extends('app')

@section('content')

    <h1 class="page-heading">Your Notices</h1>

    <table class="table table-striped table-bordered tex">
        <thead>
            <th>This Content:</th>
            <th>Accessible Here:</th>
            <th>Pelanggaran:</th>
            <th>Notice sent</th>
            <th class="text-center">Content Removed</th>
        </thead>

        <tbody>
        @foreach($pemberitahuan as $pemberitahuan)
            <tr>
                <td>{{$pemberitahuan->judul_pelanggaran}}</td>
                <td>{{$pemberitahuan->link_pelanggaran}}</td>
                <td>{{$pemberitahuan->link_asli}}</td>
                <td>{{$pemberitahuan->created_at->diffForHumans()}}</td>
                <td>
                    {!! Form::open(['data-remote','method' => 'PATCH', 'url'=>'pemberitahuan/' . $pemberitahuan->id]) !!}
                        <div class="form-group text-center">
                            {!! Form::checkbox('content_removed',$pemberitahuan->content_removed, $pemberitahuan->content_removed, ['data-click-submits-form']) !!}
                            {{--{!! Form::submit('Submit') !!}--}}
                        </div>
                    {!! Form::close() !!}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

    @unless(count($pemberitahuan))
        <p class="text-center">Kamu gak punya Laporan apapun tentang DMCA</p>
    @endunless
@endsection