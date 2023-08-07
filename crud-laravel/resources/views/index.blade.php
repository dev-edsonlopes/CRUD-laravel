@extends('templates.template')
@section('content')
    <h1 class="text-center">CRUD</h1>
    <div class="text-center">
        <button class="btn btn-success mt-3 mb-4">
            Cadastrar
        </button>
    </div>
    <div class="col-8 m-auto">
        <table class="table table-dark table-hover">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($book as $books)
                    @php
                        $user=  $books->find($books->id)->relUsers;
                    @endphp
                        <tr>
                            <th scope="row">{{ $books->id }}</th>
                            <td>{{ $books->title }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $books->price }}</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-dark">
                                        visualizar
                                    </button>
                                </a>
                                <a href="">
                                    <button class="btn btn-primary">
                                        Editar
                                    </button>
                                </a>
                                <a href="">
                                    <button class="btn btn-danger">
                                        Deletar
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </table>
    </div>
@endsection
