@include('layouts.partials.errors')

        <div class="status-post">
            {{Form::open(['route'=>'statuses_path'])}}

            <!--status form input-->
            <div class="form-group">
                {{Form::textarea('body',null,['class'=>'form-control','rows'=>3,
                            'placeholder'=>"apa yang kamu pikirkan?"])}}
            </div>

            <!--Submit input-->
            <div class="form-group status-post-submit">
                {{Form::submit('Post Status',['class'=>'btn btn-default btn-xs'])}}
            </div>
            {{Form::close()}}
        </div>