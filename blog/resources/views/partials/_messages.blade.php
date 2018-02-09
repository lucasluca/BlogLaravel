@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {{Session::get('success')}}
    </div>

@endif

@if(count($erros) > 0)

    <div class="alert alert-danger" role="alert">
        <strong>Erros:</strong>
        <ul>
            @foreach($erros->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif