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
            <div class="card-header text-center font-weight-bold">
                Categorias - Visualizar Registro
            </div>
            <div class="card-body">
                <form name="show-categoria-form" id="show-get-form" method="POST">
                    @csrf
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <div class="form-group">
                            <label for="id">Registro</label>
                            <input type="text" id="id" name="id" value="{{ $categorias->id }}" disabled class="form-control" required="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input type="text" id="descricao" name="descricao" value="{{ $categorias->descricao }}" disabled class="form-control" required="">
                            <!-- <textarea name="descricao" class="form-control" required=""></textarea> -->
                        </div>
                    </div>
                    <a class="btn btn-info" href="{{ route('categorias.categorias')}}">Voltar</a>

                </form>
            </div>
        </div>
    </div>

    @endsection