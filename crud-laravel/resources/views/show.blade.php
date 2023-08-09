@extends('templates.template')
@section('content')
    <h1 class="text-center">Visualizar</h1>
   
    <div class="col-8 m-auto">
        @php
            $user=  $book->find($book->id)->relUsers;
        @endphp
        <ul>
            <li>Titulo: {{ $book->title }}</li>
            <li>Páginas: {{ $book->page }} </li>
            <li>Preço: {{ $book->price }} </li>
            <li>Autor: {{ $user->name }}</li>
            <li>Email do autor: {{ $user->email }}</li>
        </ul>
    </div>
@endsection
