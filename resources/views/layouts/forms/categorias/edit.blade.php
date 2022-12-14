@extends('layouts.admin')

@section('content')

<head>
    <title>Cadastro de Categorias</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card">

            @if ($errors->any())
            <div class="alert alert-danger">
                There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card-header text-center font-weight-bold">
                Categorias - Editar Registro
            </div>
            <div class="card-body">
                <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-2">
                            <div class="form-group">
                                <strong>Registro:</strong>
                                <input type="number" name="id" min="10" max="10" value="{{ $categoria->id }}" class="form-control" disabled placeholder="Registro">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Descrição:</strong>
                                <input type="text" name="descricao" minlength="3" maxlength="100" value="{{ $categoria->descricao }}" class="form-control" placeholder="Descrição">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a class="btn btn-info" href="{{ route('categorias.index')}}">Voltar</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    @endsection