@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
           
                <div class="card-header">{{ __('Endereço') }}</div>
                
                <div class="card-body">

                    <div>    
                        @can('create', App\Models\CategoriasCV::class)
                            <a href="{{route('categoriascv.create')}}" class="btn btn-info active" role="button"> 
                               Cadastrar
                            </a>
                        @endcan 
    
                    </div>     

                    <hr>
                    <div class="text-dark">
                     
                        <p>
                           <strong>País:</strong> 
                        </p>
                        <p>
                           <strong>Cidade:</strong> 
                        </p>
                        <p>
                           <strong>Estado:</strong> 
                        </p>
                        <p>
                           <strong>Endereço:</strong> 
                        </p>
                        <p>
                           <strong>Bairro:</strong> 
                        </p>
                        <p>
                           <strong>CEP:</strong> 
                        </p>
                     </div>                                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
