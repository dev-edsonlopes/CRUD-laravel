@extends('templates.template')
@section('content')
    <h1 class="text-center">Cadastrar</h1>
    <hr>

    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" method="POST" action="{{ url('books') }}">
            @csrf
            <input class="form-control" type="text" name="title" id="title" placeholder="Título"><br>
            <select class="form-control" name="id_user" id="id_user"> 
                <option value="">Selecione</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select><br>
            <input class="form-control" type="text" name="pages" id="pages" placeholder="Páginas"><br>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço"><br>
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </form>
    </div>
@endsection
