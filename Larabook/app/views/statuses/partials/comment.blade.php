<article class="comments__comment media border-comment">
    <div class="pull-left">
        @include ('users.partials.avatar2', ['user' => $comment->owner, 'class' => 'media-object'])
    </div>
    
    <div class="media-body">
        <h4 class="media-heading">{{$comment->owner->username}}</h4>
        
        {{$comment->body}}
    </div>
</article>