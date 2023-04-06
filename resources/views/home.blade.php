@extends('layouts.admin')

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
                                            <p class="card-text">Valor cobrado é de R$ 10,00 para cada documento.</p>
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
                                            <p class="card-text">Valor a ser cobrado é de R$ 3,00 taxa serviço.</p>
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
                                            <p class="card-text">Valor a ser cobrado é de R$ 5,00 taxa serviço.</p>
                                            <p class="card-text">Para resultado de exame, caso tenha mais de uma página e o cliente preferir (preto/branco) cobrar R$ 0,50 a mais para cada página.</p>
                                            <p class="card-text">Para Laudo de exame, imprimir (preto/branco) e cobrar R$ 1,00 para cada página.</p>
                                            <p class="card-text">Caso tenha mais de uma página e o cliente preferir (colorido) cobrar R$ 2,00 a mais para cada página.</p>

                                            <!--                                             <div class="card-footer">
                                                <button onclick="window.open('https://tomcat.santacasalimeira.com.br/LaboratorioWeb/indexLaboratorio.jsp', '_blank')" type="button" class="btn btn-success col-10">Frei Galvão</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://resultadoexame.hapvida.com.br/autenticacao.xhtml', '_blank')" type="button" class="btn btn-success col-10">Hapvida</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://meddiagnostico.com.br/site', '_blank')" type="button" class="btn btn-success col-10">Med Diagnostico</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://areadopaciente.amorsaude.com.br/patient-interface/rpyX/login', '_blank')" type="button" class="btn btn-success col-10">Amor e Saúde</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://pixeon.clickvita.com.br/#/instituicao/ULTRAVIEW', '_blank')" type="button" class="btn btn-success col-10">Ultra View</button>
                                            </div> -->

                                            <div class="card-footer">

                                                <div><a href="https://tomcat.santacasalimeira.com.br/LaboratorioWeb/indexLaboratorio.jsp" target="_blank">Frei Galvão</a></div>
                                                <div><a href="https://resultadoexame.hapvida.com.br/autenticacao.xhtml" target="_blank">Hapvida</a></div>
                                                <div><a href="https://meddiagnostico.com.br/site" target="_blank">Med Diagnostico</a></div>
                                                <div><a href="https://areadopaciente.amorsaude.com.br/patient-interface/rpyX/login" target="_blank">Amor e Saúde</a></div>
                                                <div><a href="https://pixeon.clickvita.com.br/#/instituicao/ULTRAVIEW" target="_blank">Ultra View</a></div>
                                                <div><a href="https://pixeon.clickvita.com.br/#/instituicao/CRL" target="_blank">CRL - Centro Radiológico</a></div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/Curriculo.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Currículo</h5>
                                            <hr />
                                            <p class="card-text">Valor a ser cobrado é de R$ 8,00 taxa serviço.</p>
                                            <p class="card-text">Caso tenha mais de uma página e o cliente preferir (preto/branco) cobrar R$ 0,50 a mais para cada página.</p>
                                            <p class="card-text">Caso tenha mais de uma página e o cliente preferir (colorido) cobrar R$ 2,00 a mais para cada página.</p>
                                            <p class="card-text">Caso o cliente queira levar o arquivo em PDF, será cobrado R$ 2,00</p>
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
                                            <p class="card-text">Valor a ser cobrado é de R$ 3,00 taxa serviço.</p>
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
                                            <p class="card-text">Valor a ser cobrado é de R$ 3,00 taxa serviço.</p>
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
                                            <p class="card-text">Valor a ser cobrado é de R$ 5,00 taxa serviço.</p>
                                            <p class="card-text">Caso tenha mais de uma página cobrar R$ 0,50 a mais para cada página.</p>

                                        </div>
                                        <div class="card-footer">
                                            <button onclick="window.open('https://www.ssp.sp.gov.br/servicos/atestado.aspx', '_blank')" type="button" class="btn btn-success">Acesse por aqui</button>

                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/cpf.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">CPF</h5>
                                            <hr />
                                            <p class="card-text">Valor a ser cobrado é de R$ 5,00 para cada documento/consulta.</p>
                                            <p class="card-text">Caso cliente queira impressão em colorido, cobrar mais R$ 2,00</p>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://servicos.receita.fazenda.gov.br/servicos/cpf/consultasituacao/consultapublica.asp', '_blank')" type="button" class="btn btn-success col-10">Consulta CPF</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://servicos.receita.fazenda.gov.br/Servicos/CPF/alterar/default.asp', '_blank')" type="button" class="btn btn-success col-10">Atualiza CPF</button>
                                            </div>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://servicos.receita.fazenda.gov.br/Servicos/CPF/ImpressaoComprovante/ConsultaImpressao.asp', '_blank')" type="button" class="btn btn-success col-10">Imprimir CPF</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/musicamp3.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">

                                        <div class="card-body">
                                            <h5 class="card-title">Download Musicas MP3 no pen drive</h5>
                                            <hr />
                                            <p class="card-text">Até 30 músicas cobrar R$ 20,00.</p>
                                            <p class="card-text">Caso for até 60 músicas cobrar R$ 30,00.</p>
                                            <p class="card-text">Caso for até 90 músicas cobrar R$ 40,00.</p>

                                            <p class="card-text">Pedir para o cliente buscar somente no dia seguinte, porque é demorado.</p>
                                        </div>
                                        <div class="card-footer">
                                            <button onclick="window.open('https://bluemusic.com.br/baixar-musica-do-youtube/', '_blank')" type="button" class="btn btn-success col-10">Acesse por aqui</button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/letrasMusicas.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Letras Músicas</h5>
                                            <hr />
                                            <p class="card-text">Valor a ser cobrado é de R$ 3,00 taxa serviço, esse valor é para cada letra de música.</p>
                                            <p class="card-text">Caso tenha mais de uma página e o cliente preferir (preto/branco) cobrar R$ 0,50 a mais para cada página.</p>
                                            <p class="card-text">Caso tenha mais de uma página e o cliente preferir (colorido) cobrar R$ 2,00 a mais para cada página.</p>
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
                            </br>

                            <div class="bd-example">
                                <div class="card-group">

                                    <div class="card">
                                        <img src="{{ asset('storage/portalCidadao.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Portal do Cidadão</h5>
                                            <hr />
                                            <p class="card-text">Secretaria de Saúde de Limeira - SP.</p>
                                            <p class="card-text">Valor a ser cobrado é de R$ 3,00 taxa serviço.</p>
                                            <p class="card-text">Caso tenha mais de uma página cobrar R$ 0,50 a mais para cada página.</p>
                                        </div>
                                        <div class="card-footer">
                                            <button onclick="window.open('https://limeiraportal-saude.ids.inf.br/PortalLimeiraWS/IDS/portal/index.html#/login', '_blank')" type="button" class="btn btn-success">Acesse por aqui</button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/areaCidadao.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Área do Cidadão</h5>
                                            <hr />
                                            <p class="card-text">Seja bem-vindo. Portal de atendimento ao contribuinte.</p>
                                            <p class="card-text">Valor a ser cobrado é de R$ 3,00 taxa serviço.</p>
                                            <p class="card-text">Caso tenha mais de uma página cobrar R$ 0,50 a mais para cada página.</p>
                                        </div>
                                        <div class="card-footer">
                                            <button onclick="window.open('https://limeira.iibr.com.br/', '_blank')" type="button" class="btn btn-success">Acesse por aqui</button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/gps.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">GPS</h5>
                                            <hr />
                                            <p class="card-text">SAL - Sistema de Acréscimos Legais.</p>
                                            <p class="card-text">Valor a ser cobrado é de R$ 3,00 taxa serviço.</p>
                                            <p class="card-text">Caso tenha mais de uma página cobrar R$ 0,50 a mais para cada página.</p>
                                        </div>
                                        <div class="card-footer">
                                            <button onclick="window.open('http://sal.receita.fazenda.gov.br/PortalSalInternet/faces/pages/calcContribuicoesCI/filiadosApos/selecionarOpcoesCalculoApos.xhtml', '_blank')" type="button" class="btn btn-success">Acesse por aqui</button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/posterizer.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Aumentar Imagem</h5>
                                            <hr />
                                            <p class="card-text">Valor a ser cobrado é de R$ 3,00 taxa serviço, esse valor é para cada imagem aumentada.</p>
                                            <p class="card-text">Caso tenha mais de uma página e for branco/preto cobrar R$ 1,00 a mais para cada página.</p>
                                            <p class="card-text">Caso tenha mais de uma página e for colorido cobrar R$ 2,00 a mais para cada página.</p>
                                        </div>
                                        <div class="card-footer">
                                            <button onclick="window.open('http://posterizer.online/rasterbator/', '_blank')" type="button" class="btn btn-success">Acesse por aqui</button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="{{ asset('storage/boletos.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Outros Boletos</h5>
                                            <hr />
                                            <p class="card-text">Valor a ser cobrado é de R$ 3,00 taxa serviço.</p>
                                            <div class="card-footer">
                                                <button onclick="window.open('https://www.itau.com.br/cartoes/magalu/consulte-sua-fatura', '_blank')" type="button" class="btn btn-success col-10">Magalu</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            </br>

                            <div class="bd-example">
                                <div class="card-group">

                                    <div class="card">
                                        <img src="{{ asset('storage/sus.jpg') }}" height="200" width="200" class="card-img-top" alt="" title="">
                                        <div class="card-body">
                                            <h5 class="card-title">Sistema Único de Saúde</h5>
                                            <hr />
                                            <p class="card-text">Largura da Impressão 5 cm de cada lado.</p>
                                            <p class="card-text">Valor a ser cobrado é de R$ 3,00 taxa serviço.</p>
                                            <p class="card-text">Caso tenha mais de uma página cobrar R$ 0,50 a mais para cada página.</p>
                                        </div>
                                        <div class="card-footer">
                                            <button onclick="window.open('https://conectesus-paciente.saude.gov.br/perfil', '_blank')" type="button" class="btn btn-success">Acesse por aqui</button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        
                                    </div>
                                    <div class="card">
                                        
                                    </div>
                                    <div class="card">
                                         
                                    </div>
                                    <div class="card">
                                         

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