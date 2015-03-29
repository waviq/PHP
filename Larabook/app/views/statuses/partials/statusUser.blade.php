        
        <!--UNTUK NAMPILIN STATUS USER-->
        
        
        @if($user->statuses->count())
        
                @foreach($user->statuses as $status)
                    @include('statuses.partials.status')
                @endforeach
            @else
                <p>User ini gak punya status</p>
        @endif