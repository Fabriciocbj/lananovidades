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

  
</div>
@endsection