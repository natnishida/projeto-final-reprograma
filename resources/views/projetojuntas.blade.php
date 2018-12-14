@extends('layouts.app')

@section('content')
<div class="container-fluid containerprojetojuntas d-flex">

    <div class="container divprojeto bg-light rounded p-5 align-self-center">
            <h1 class="mb-3">Projeto Vamos Juntas</h1>
            <h2 class="mb-5 titulojuntas"> Consultoria para Microempreendedoras</h2>
            <div class="row">
                    <div class="col-sm-12 col-md-6 p-4">
                      <h3>O que é o Projeto Juntas?</h3>
                      <p>Empoderamento das mulheres por meio de conhecimento, rede de apoio e tecnologia.</p>
                      <h3>Mas como faremos isso?</h3>
                      <p>Vamos entender juntas sobre o seu negócio, sobre o seu segmento.</p>
                      <p>Vamos construir juntas um plano de desenvolvimento digital, que pode contar com websites, estratégias de marketing digital, SEO, Links Patrocinados.</p>
                      <p>Vamos disponibilizar e ensinar você a atualizar e ver seus resultados diretamente em dashboards e relatórios gerenciais.</p>
                      <p>Por último, vamos entregar um sistema de acompanhamento com módulos disponíveis baseados nas suas necessidades, como por exemplo, módulo financeiro, módulo estoque, entre outros.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 imgprojetojuntas">

                    </div>
            </div>
            <div class="row">
                  <div class="d-sm-none d-lg-block col-md-6 imgprojetojuntas2">

                  </div>

                  @guest

                  <div class="col-sm-12 col-md-6 p-4">
                    <h3>Qual o primeiro passo?</h3>
                    <p>Para saber qual caminho seguir, precisamos saber de onde estamos partindo, certo?</p>
                    <p>Quer ter um diagnóstico com algumas dicas bem bacanas e já saber onde podemos melhorar seu negócio?</p>
                    <p>Preparamos algumas perguntinhas bem legais (e rápidas) para a gente ter um ponto de partida.</p>
                    <p>Vamos juntas!</p>
                    <a href="/register" class="btn btn-primary btn-cat align-self-center mt-3">Clique aqui!</a>

                  </div>

                  @else
                      <div class="col-sm-12 col-md-6 p-4">
                      <h3>Você já sabe qual é o nosso primeiro passo, {{ Auth::user()->name }}?</h3>
                      <p>Se sim, pode fazer novamente clicando abaixo, mas se ainda não, bora!</p>
                      <p>Quer ter um diagnóstico com algumas dicas bem bacanas e já saber onde podemos melhorar seu negócio?</p>
                      <p>Preparamos algumas perguntinhas bem legais (e rápidas) para a gente ter um ponto de partida.</p>
                      <p>Vamos juntas!</p>
                      <a href="/register" class="btn btn-primary btn-cat align-self-center mt-3">Clique aqui!</a>
                      </div>
                  @endguest

            </div>

  </div>





</div>
@endsection
