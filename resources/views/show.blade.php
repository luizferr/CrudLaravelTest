@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1>
    
    <div class="col-8 m-auto">

    <table class="table text-center">
            <thead>
                <th>Titulo: </th>
                <th>Páginas: </th>
                <th>Preço: </th>
                <th>Autor: </th>
                <th>Email do autor: </th>
            </thead>
            <tbody>
                @php
                    $user=$book->find($book->id)->relUsers;
                @endphp
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->pages }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a href="{{ url('/books') }}">
                <button class="btn btn-success">Voltar</button>
            </a>
        </div>
    </div>
    

@endsection