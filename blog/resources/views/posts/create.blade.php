@extends('main')

@section('title', '| Criando um post')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <h1>Criar novo post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store']) !!}
            {{Form::label('title', 'Title:')}}
            {{Form::text('title', null, array('class' => 'form-control'))}}

            {{Form::label('body', 'Post Body:')}}
            {{Form::textarea('body', null, array('class' => 'form-control'))}}
            {{Form::submit('Create Post', null, array('class' => 'btn btn-success btn-lg btn-block'))}}
            {!! Form::close() !!}
        </div>

    </div>

@endsection