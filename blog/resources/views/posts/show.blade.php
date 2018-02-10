@extends('main')

@section('title', '|View Post')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1> {{$post->title}} </h1>
            <p> {{$post->body}} </p>
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Create at:</dt>
                    <dd>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last update at:</dt>
                    <dd>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</dd>
                </dl>

                <div class="row">
                    <div class="col-sm-6">
                        <a href="#" class="btn btn-primary btn-block">Editar</a>
                    </div>

                    <div class="col-sm-6">
                        <a href="#" class="btn btn-danger btn-block">Deletar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

@endsection