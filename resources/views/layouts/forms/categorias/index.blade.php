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
        @foreach ($categoria as $registro)
        <tr>
            <td>{{ $registro->id}}</td>
            <td>{{ $registro->descricao }}</td>

            <td style='width:15%'>
                <form action="{{ route('categorias.destroy',$registro->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('categorias.show', $registro->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('categorias.edit', $registro->id) }}">Edit</a>

                    <!-- @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button> -->
                </form>
            </td>



        </tr>
        @endforeach
    </table>
</div>
@endsection