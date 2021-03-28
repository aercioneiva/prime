@if(session('sucesso'))
    <div class="alert alert-success">
        {{session('sucesso')}}
    </div>
@endif

@if($errors->any())
    <ul class="alert alert-danger" style="list-style-type: none;">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
