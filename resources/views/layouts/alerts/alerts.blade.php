
@if (count($errors) > 0)
    <div class="alert alert-danger">
        Oops! We have some erros
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('message'))
    <div class="alert alert-success">
      {!!Session::get('message')!!}
    </div>
@endif
