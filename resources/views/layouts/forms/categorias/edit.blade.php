@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cadastro Categorias</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success float-right" href="{{ route('categorias.create') }}"> Nova Categoria</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Registro</th>
            <th>Descrição</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($categorias as $categoria)
        <tr>
            <td>{{ $categoria->id    }}</td>
            <td>{{ $categoria->descricao }}</td>
            <td>
                <form action="{{ route('categorias.destroy',$categoria->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('categorias.show',$categoria->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('categorias.edit',$categoria->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection