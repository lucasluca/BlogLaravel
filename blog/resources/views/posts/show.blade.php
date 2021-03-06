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
                    <label>Url:</label>
                    <p><a href="{{url('blog/'.$post->slug)}}">{{url('blog/'.$post->slug)}}</a></p>
                </dl>
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
                        {!! Html::linkroute('posts.edit', 'Editar', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>

                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}                        
                        {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-block'])  !!}
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{ Html::linkRoute('posts.index', '<< Veja todos os Posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

   

@endsection