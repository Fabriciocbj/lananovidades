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

                                        <img src="{{ asset('storage/2ViaDocVeiculo.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">

                                        <div class="card-body">
                                            <h5 class="card-title">Detran 2 via Doc</h5>                                            
                                            <hr />
                                            <p class="card-text">Para retirar a segunda via atualizada é necessário ter feito o pagamento do licenciamento.</p>
                                            <p class="card-text">O sistema do Detran libera a partir de 24 horas o documento atualizado.</p>
                                            <p class="card-text">Valor a ser cobrado é de R$ 5,00 para cada documento.</p>
                                        </div>
                                        <div class="card-footer">
                                            <button onclick="window.open('https://www.detran.sp.gov.br/wps/portal/!ut/p/z1/lZFLDoIwFEXXwgp6SxtShgWB8guCCtiJYWRIFB0Y1y8wI9GCd9b0nPblXaJJS_TQvftr9-ofQ3cbz2ftXLCIhFfZHgMin5NmBhjHwfWoBJgSkKI6KpmBgjtEj9ecugGlPvKiVgFKFSq6hxgfwIof8T99EdTh5LOQBoWNFNv8pISvlLCziO58SJfzPE5SBpdt8_EjcuP_BkBv2b8B0ObxGqJnxNSgEZgqWgJfOpgB05LXxnzeT3Na9HEvLesDV9RSXQ!!/dz/d5/L2dBISEvZ0FBIS9nQSEh/#Z7_419E11C0MOVHE0QHFH1P080040', '_blank')" type="button" class="btn btn-success">Acesse por aqui</button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/planodesaude.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Boletos Saúde</h5>
                                            <hr />
                                            <p class="card-text">Valor a ser cobrado é de R$ 2,00 para cada documento.</p>
                                            <p class="card-text">Caso tenha mais de uma página cobrar R$ 0,50 a mais para cada página.</p>
                                            <div class="card-footer">
                                                <button onclick="window.open('http://tomcatplano.hospfreigalvao.com.br:8080/PlanodeSaude/', '_blank')" type="button" class="btn btn-success col-10">Frei Galvão</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://webhap.hapvida.com.br/pls/webhap/webNewBoleto.login', '_blank')" type="button" class="btn btn-success col-10">Hapvida</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('http://solus.unimedlimeira.com.br/solusweb/usuario/', '_blank')" type="button" class="btn btn-success col-10">Unimed</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/planodesaude.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Resultado Exames</h5>
                                            <hr />
                                            <p class="card-text">Valor a ser cobrado é de R$ 2,00 para cada documento.</p>
                                            <p class="card-text">Caso tenha mais de uma página e o cliente preferir (preto/branco) cobrar R$ 0,50 a mais para cada página.</p>
                                            <p class="card-text">Caso tenha mais de uma página e o cliente preferir (colorido) cobrar R$ 2,00 a mais para cada página.</p>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://tomcat.santacasalimeira.com.br/LaboratorioWeb/indexLaboratorio.jsp', '_blank')" type="button" class="btn btn-success col-10">Frei Galvão</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://resultadoexame.hapvida.com.br/autenticacao.xhtml', '_blank')" type="button" class="btn btn-success col-10">Hapvida</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/Curriculo.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Currículo</h5>
                                            <hr />
                                            <p class="card-text">Valor a ser cobrado é de R$ 5,00.</p>
                                            <p class="card-text">Caso tenha mais de uma página e o cliente preferir (preto/branco) cobrar R$ 0,50 a mais para cada página.</p>
                                            <p class="card-text">Caso tenha mais de uma página e o cliente preferir (colorido) cobrar R$ 2,00 a mais para cada página.</p>
                                        </div>
                                        <div class="card-footer">
                                            <button onclick="window.open('https://www.canva.com/folder/FAFMJ7meJWk', '_blank')" type="button" class="btn btn-success">Acesse por aqui</button>
                                        </div>
                                    </div>
                                    <div class="card">

                                        <img src="{{ asset('storage/provedores.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">

                                        <div class="card-body">
                                            <h5 class="card-title">Boletos Telefone</h5>
                                            <hr />
                                            <p class="card-text">Valor a ser cobrado é de R$ 2,00 para cada documento.</p>
                                            <p class="card-text">Caso tenha mais de uma página cobrar R$ 0,50 a mais para cada página.</p>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://meutim.tim.com.br/novo/login?bmctx=8B94D49C137CCFE1FA9512A461AC79DB4FBA69EFB5FA39109654FE9A6E39100A&contextType=external&username=string&enablePersistentLogin=true&contextValue=%2Foam&password=secure_string&challenge_url=https%3A%2F%2Fmeutim.tim.com.br%2Fnovo%2Flogin&request_id=4872571515521280402&authn_try_count=0&locale=en_US&resource_url=https%253A%252F%252Fmeutim.tim.com.br%252Fmenu%252Fminha-conta%252Fconta-online%253F_ga%253D2.7578418.1807873059.1627909602-788225989.1626979103%20TIM%20Live', '_blank')" type="button" class="btn btn-success col-10">Tim</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://fatura-facil.claro.com.br/', '_blank')" type="button" class="btn btn-success col-10">Claro</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://api.whatsapp.com/send?phone=5511999151515&text=Ol%C3%A1!!', '_blank')" type="button" class="btn btn-success col-10">Vivo</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </br>

                            <div class="bd-example">
                                <div class="card-group">

                                    <div class="card">
                                        <img src="{{ asset('storage/Mei-Das.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Das-Mei</h5>
                                            <hr />
                                            <p class="card-text">Programa Gerador de DAS do Microempreendedor Individual.</p>
                                            <p class="card-text">Valor a ser cobrado é de R$ 2,00 para cada documento.</p>
                                            <p class="card-text">Caso tenha mais de uma página cobrar R$ 0,50 a mais para cada página.</p>
                                        </div>
                                        <div class="card-footer">
                                            <button onclick="window.open('http://www8.receita.fazenda.gov.br/SimplesNacional/Aplicacoes/ATSPO/pgmei.app/Identificacao', '_blank')" type="button" class="btn btn-success">Acesse por aqui</button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/AntecedentesCriminais.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Antecedentes Criminais</h5>
                                            <hr />
                                            <!-- <p class="card-text">Para retirar a segunda via atualizada é necessário ter feito o pagamento do licenciamento.</p>
                                            <p class="card-text">O sistema do Detran libera a partir de 24 horas o documento atualizado.</p> -->
                                        </div>
                                        <div class="card-footer">
                                            <button onclick="window.open('https://www.ssp.sp.gov.br/servicos/atestado.aspx', '_blank')" type="button" class="btn btn-success">Acesse por aqui</button>

                                        </div>
                                    </div>
                                    <div class="card">
                                        <!-- <img src="{{ asset('storage/Curriculo.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Currículo</h5>
                                            <p class="card-text">Programa Gerador de DAS do Microempreendedor Individual.</p>
                                    </div>
                                    <div class="card-footer">
                                        <button onclick="window.open('http://www8.receita.fazenda.gov.br/SimplesNacional/Aplicacoes/ATSPO/pgmei.app/Identificacao', '_blank')" type="button" class="btn btn-success">Acesse por aqui</button>
                                    </div> -->
                                    </div>
                                    <div class="card">
                                        <!-- <img src="{{ asset('storage/provedores.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">

                                        <div class="card-body">
                                            <h5 class="card-title">Boletos Telefone</h5>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://meutim.tim.com.br/novo/login?bmctx=8B94D49C137CCFE1FA9512A461AC79DB4FBA69EFB5FA39109654FE9A6E39100A&contextType=external&username=string&enablePersistentLogin=true&contextValue=%2Foam&password=secure_string&challenge_url=https%3A%2F%2Fmeutim.tim.com.br%2Fnovo%2Flogin&request_id=4872571515521280402&authn_try_count=0&locale=en_US&resource_url=https%253A%252F%252Fmeutim.tim.com.br%252Fmenu%252Fminha-conta%252Fconta-online%253F_ga%253D2.7578418.1807873059.1627909602-788225989.1626979103%20TIM%20Live', '_blank')" type="button" class="btn btn-success col-10">Tim</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://fatura-facil.claro.com.br/', '_blank')" type="button" class="btn btn-success col-10">Claro</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://api.whatsapp.com/send?phone=5511999151515&text=Ol%C3%A1!!', '_blank')" type="button" class="btn btn-success col-10">Vivo</button>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/letrasMusicas.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Letras Músicas</h5>
                                            <hr />
                                            <p class="card-text">Valor a ser cobrado é de R$ 2,00 para cada documento.</p>
                                            <p class="card-text">Caso tenha mais de uma página e o cliente preferir (preto/branco) cobrar R$ 0,50 a mais para cada página.</p>
                                            <p class="card-text">Caso tenha mais de uma página e o cliente preferir (colorido) cobrar R$ 2,00 a mais para cada página.</p>

                                            <hr />
                                            <div class="card-footer">
                                                <button onclick="window.open('https://www.cifraclub.com.br/', '_blank')" type="button" class="btn btn-success col-10">Cifra Clube</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://www.letras.mus.br/', '_blank')" type="button" class="btn btn-success col-10">Letras</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                    </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection