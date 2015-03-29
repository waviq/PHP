

@if($login)

    @if($user->isFollowedBy($penggunaSaatIni))

        <!--Nampilin Form UnFollow-->
        {{ Form::open(['method' => 'DELETE', 'route' => ['unfollows_path', $user->id]]) }}
        {{ Form::hidden('userIdToUnfollow', $user->id) }}
        <button type="submit" class="btn btn-danger">Unfollow {{ $user->username }}</button>

        {{ Form::close() }}

        <!--Nampilin Form Follow-->
        
        @else
            {{ Form::open(['route' => 'follows_path']) }}
            {{ Form::hidden('userIdToFollow', $user->id) }}
            <button type="submit" class="btn btn-primary">Follow {{ $user->username }}</button>

            {{ Form::close() }}

    @endif

@endif