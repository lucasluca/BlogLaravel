@extends('main')

@section('title', '| Criando um post')

@section('stylesheets')

    {!!Html::style('css/parsley.css') !!}

@endsection

@section('content')


    <div class="row">
        <div class="col-md-12">
            <h1>Criar novo post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
            {{Form::label('title', 'Title:')}}
            {{Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '10'))}}

            {{Form::label('slug', 'Slug:')}}
            {{Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255'))}}

            {{Form::label('body', 'Post Body:')}}
            {{Form::textarea('body', null, array('class' => 'form-control',  'required' => ''))}}
            {{Form::submit('Create Post', null, array('class' => 'btn btn-success btn-lg btn-block'))}}
            {!! Form::close() !!}
        </div>

    </div>

@endsection

@section('scripts')
    {!!Html::script('js/parsley.min.js') !!}
@endsection