<!-- form input-->
<div class="form-group">
    {!! Form::label('title','Judul:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<!--Penulis form input-->
<div class="form-group">
    {!! Form::label('penulis','Penulis:') !!}
    {!! Form::text('penulis',null,['class'=>'form-control']) !!}
</div>

<!--Body form input-->
<div class="form-group">
    {!! Form::label('body','Body:') !!}
    {!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>

<!--Published_at form input-->
<div class="form-group">
    {!! Form::label('published_at','Publish On:') !!}
    {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
</div>

<!--Kategori form input-->
<div class="form-group">
    {!! Form::label('kategori','Kategori:') !!}
    {!! Form::select('kategori[]', $kategori, null,['class'=>'form-control','multiple']) !!}
</div>

<!--Add Artikel Button Submit-->
<div class="form-group">
    {!! Form::submit($namaTombol, ['class' =>'btn btn-primary form-control']) !!}
</div>