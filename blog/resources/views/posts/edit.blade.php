@extends('main')

@section('title', '|Editar o Post')

@section('content')

    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
        <div class="col-md-8">

            {{Form::label('title', 'Titulo:')}}
            {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

            {{Form::label('title', 'Corpo:', ['class' => 'form-spacing-top'])}}
            {{ Form::textarea('body', null, ["class" => 'form-control']) }}
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
                        {!! Html::linkRoute('posts.show', 'Cancelar', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>

                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.update', 'Salvar alterações', array($post->id), array('class' => 'btn btn-success btn-block')) !!}    
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div><!-- end of row-->

    

    
   

@endsection