@extends('layouts.default')

@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="media">
            <div class="pull-left">
                @include('users.partials.avatar2',['size'=>50])
            </div>

            <div class="media-body">
                <h1 class="media-heading">{{$user->username}}</h1>
                
                <ul class="list-inline text-muted">
                    <li>{{$user->statuses->count() }} Status</li>
                    <li>{{$user->followers->count() }} Followers</li>
                    
                </ul>

                
                
                <div>
                    @foreach($user->followers as $follower)
                        @include('users.partials.avatar2',['size'=>25, 'user'=>$follower])
                    @endforeach
                </div>

                <div>
                    @unless($user->is($penggunaSaatIni))
                        @include('users.partials.follow-form')
                    @endif
                </div>
            </div>
        </div>
        
        
    </div>

    
    <!--    Menampilkan history status dalam user profile-->
    <div class="col-md-6">

        @if($user->is($penggunaSaatIni))
        @include('statuses.partials.publish-status-form')
        @endif

        @include('statuses.partials.statusUser')

    </div>
</div>

@stop