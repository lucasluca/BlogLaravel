@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {{Session::get('success')}}
    </div>

@endif



 {{-- @if(!$erros->isEmpty())

    <div class="alert alert-danger" role="alert">
        <strong>Erros:</strong>
        <ul>
            @foreach($erros->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif --}}


 {{-- @if(Session()->has('success')) --}}