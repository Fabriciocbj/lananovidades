@extends('layouts.app')

@section('content')
<div class="container">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <body>

                        <h1>Acesso Rápido</h1>

                        <div class="bd-example-snippet bd-code-snippet">
                            <div class="bd-example">
                                <div class="card-group">

                                    <div class="card">

                                        <img src="{{ asset('storage/boleto-planodesaude.jpg') }}" class="card-img-top" alt="" title="">

                                        <div class="card-body">
                                            <h5 class="card-title">Detran 2 via Doc</h5>
                                            <p class="card-text">Para retirar a segunda via atualizada é necessário ter feito o pagamento do licenciamento.</p>
                                            <p class="card-text">O sistema do Detran libera a partir de 24 horas o documento atualizado.</p>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-success">Acesse por aqui</button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/boleto-planodesaude.jpg') }}" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Das-Mei</h5>
                                            <p class="card-text">Programa Gerador de DAS do Microempreendedor Individual.</p>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-success">Acesse por aqui</button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/boleto-planodesaude.jpg') }}" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Boletos</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-success">Acesse por aqui</button>
                                        </div>
                                    </div>
                                    <div class="card">

                                            <img src="{{ asset('storage/boleto-planodesaude.jpg') }}" class="card-img-top" alt="" title="">

                                            <div class="card-body">
                                                <h5 class="card-title">Boletos Telefone</h5>
                                                <div class="card-footer">
                                                    <button type="button" class="btn btn-success col-6">Tim</button>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="button" class="btn btn-success col-6">Claro</button>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="button" class="btn btn-success col-6">Vivo</button>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/boleto-planodesaude.jpg') }}" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Boletos Saúde</h5>
                                            <div class="card-footer">
                                                <button type="button" class="btn btn-success col-10">Frei Galvão</button>
                                            </div>
                                            <div class="card-footer">
                                                <button type="button" class="btn btn-success col-10">Hapvida</button>
                                            </div>
                                            <div class="card-footer">
                                                <button type="button" class="btn btn-success col-10">Unimed</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            </br>

                            <!-- <div class="bd-example-snippet bd-code-snippet">
                                <div class="bd-example">
                                    <div class="card-group">

                                        
                                        <div class="card">
                                            <img src="{{ asset('storage/boleto-planodesaude.jpg') }}" class="card-img-top" alt="" title="">
                                            <div class="card-body">
                                                <h5 class="card-title">Das-Mei</h5>
                                                <p class="card-text">Programa Gerador de DAS do Microempreendedor Individual.</p>
                                            </div>
                                            <div class="card-footer">
                                                <button type="button" class="btn btn-success">Acesse por aqui</button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="{{ asset('storage/boleto-planodesaude.jpg') }}" class="card-img-top" alt="" title="">
                                            <div class="card-body">
                                                <h5 class="card-title">Boletos</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                            </div>
                                            <div class="card-footer">
                                                <button type="button" class="btn btn-success">Acesse por aqui</button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="{{ asset('storage/boleto-planodesaude.jpg') }}" class="card-img-top" alt="" title="">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                            </div>
                                            <div class="card-footer">
                                                <button type="button" class="btn btn-success">Acesse por aqui</button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="{{ asset('storage/boleto-planodesaude.jpg') }}" class="card-img-top" alt="" title="">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                            </div>
                                            <div class="card-footer">
                                                <button type="button" class="btn btn-success">Acesse por aqui</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                    </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection