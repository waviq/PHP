<article class="media border-comment">
    <div class="pull-left">
        @include('layouts.partials.avatar')
    </div>

    <div class="media-body">
        <h4 class="media-heading">{{ $status->user->username }}</h4>

        <p>{{$status->created_at->diffForHumans()}}</p>
        {{$status->body}}
        
        
    </div>


</article>