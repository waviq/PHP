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

<!--posting comment dalam status-->

@if($login)
    {{Form::open(['route'=>['comment_path',$status->id], 'class'=>'comments__create-form'])}}
        {{Form::hidden('status_id', $status->id)}}
        
        <!--body form input-->
        <div class="form-group">
            {{Form::textarea('body',null,['class'=>'form-control', 'rows'=>1])}}
        </div>
        
    {{Form::close()}}
@endif

@unless ($status->comments->isEmpty())
    <div class="comments">
        @foreach ($status->comments as $comment)
            @include ('statuses.partials.comment')
        @endforeach
    </div>
@endunless
