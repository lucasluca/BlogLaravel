@extends('main')

@section('title', '| Todas Categorias')

@section('content')

<div class="row">
    <div class="col-md-8">
        <h1>Categorias</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>N</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th>{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-md-3">
        <div class="well">
            {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                <h2>Nova Categoria</h2>
                {{ Form::label('name', 'Nome:') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}

                {{ Form::submit('Criar nova categoria', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}

            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection