@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cadastro Categorias</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categorias.create') }}" style="float: right;"> Create Categorias</a>
            </div>
        </div>
    </div>
    <br>

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
            <td>{{ $categoria->id}}</td>
            <td>{{ $categoria->descricao }}</td>
            <td>
                <form method="POST">

                    <a class="btn btn-info" href="{{ route('categorias.show',$categoria->id)}}">Show</a>
                    <a href="{{ route('categorias.edit',$categoria->id)}}" class="btn btn-warning">Edit</a>
                    
                    <a class="btn btn-danger"  >Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection