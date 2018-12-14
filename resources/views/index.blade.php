@extends('layouts.app')
@section('title', 'Digital Consulting')

@section('content')

<!-- Carrossel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >

        <div class="carousel-inner " >

            <div class="carousel-item active">
              <img class="d-block w-100" src="img/carrossel4.jpg?auto=yes&bg=777&fg=555&text=Terceiro slide" alt="Terceiro slide">
              <div class="carousel-caption rounded bg-dark">
              <h3 class="carrossel-legenda"><strong>Projeto Vamos Juntas</strong></h3>
              <h4 class="carrossel-sublegenda d-none d-lg-block">Porque juntas podemos mais!</h4>
              <p class="carrossel-legenda-paragrafo d-none d-lg-block">Está começando o seu negócio e precisa de ajuda? Só vem!</p>
              </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="img/carrossel1.jpg?auto=yes&bg=777&fg=555&text=Primeiro slide" alt="Primeiro slide">
                <div class="carousel-caption rounded bg-dark ">
                <h3 class="carrossel-legenda"><strong>Consultoria Digital</strong></h3>
                <h4 class="carrossel-sublegenda d-none d-lg-block">Para o seu negócio crescer mais e mais!</h4>
                <p class="carrossel-legenda-paragrafo d-none d-lg-block">Tem dúvidas sobre como trazer seu negócio para o mundo digital? Conte com a gente!</p>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/carrossel2.jpg?auto=yes&bg=777&fg=555&text=Segundo slide" alt="Segundo slide">
              <div class="carousel-caption rounded bg-dark">
              <h3 class="carrossel-legenda"><strong>Construa seu Website</strong></h3>
              <h4 class="carrossel-sublegenda d-none d-lg-block">Pode escolher entre institucional ou e-commerce!</h4>
              <p class="carrossel-legenda-paragrafo d-none d-lg-block">Responsivo e com estratégia de SEO montada, pensando no seu segmento.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/carrossel3.jpg?auto=yes&bg=777&fg=555&text=Terceiro slide" alt="Terceiro slide">
              <div class="carousel-caption rounded bg-dark">
              <h3 class="carrossel-legenda"><strong>Dashboards e sistemas gerenciais</strong></h3>
              <h4 class="carrossel-sublegenda d-none d-lg-block">Precisa controlar seus números?</h4>
              <p class="carrossel-legenda-paragrafo d-none d-lg-block">Vamos definir as melhores métricas e entregar um dashboard personalizado para você nunca mais se perder!</p>
              </div>
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
<!-- Fim do carrossel -->

<div class="parallax mt-3 mb-3 d-flex flex-column justify-content-center">
      <hr class="align-self-center">
      <div class="textocategorias align-self-center">
          <h2><span>
            No que podemos ajudar hoje?</span></h2>
      </div>



<!-- Início dos núcleos -->

      <ul class="container nav nav-pills d-flex flex-row justify-content-around bg-light" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-projetojuntas-tab" data-toggle="pill" href="#pills-projetojuntas" role="tab" aria-controls="pills-projetojuntas" aria-selected="true">Projeto Vamos Juntas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " id="pills-consultoria-tab" data-toggle="pill" href="#pills-consultoria" role="tab" aria-controls="pills-consultoria" aria-selected="false">Consultoria Digital</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-website-tab" data-toggle="pill" href="#pills-website" role="tab" aria-controls="pills-website" aria-selected="false">Construção de Website</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-seo-tab" data-toggle="pill" href="#pills-seo" role="tab" aria-controls="pills-seo" aria-selected="false">SEO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-dashboards-tab" data-toggle="pill" href="#pills-dashboards" role="tab" aria-controls="pills-dashboards" aria-selected="false">Dashboards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-sistemas-tab" data-toggle="pill" href="#pills-sistemas" role="tab" aria-controls="pills-sistemas" aria-selected="false">Sistemas Gerenciais</a>
        </li>

      </ul>
      <div class="tab-content container p-sm-0 p-md-3 mb-4 border-top border-primary" id="pills-tabContent">

          <div class="tab-pane bg-light fade show active" id="pills-projetojuntas" role="tabpanel" aria-labelledby="pills-projetojuntas-tab">
            <div class="media d-flex">
                <div class="flex-column align-self-center img-categorias m-sm-2 m-md-3">
                  <img class="m-2 img-categorias align-self-center rounded-circle" src="img/carrossel4.jpg" alt="Projeto Vamos juntas consultoria para empreendedoras">
                  <a href="/projetoreprograma/public/projetoreprograma/public/projetojuntas" class="btn btn-primary btn-sm align-self-center m-3 d-sm-block d-md-none">Saiba Mais</a>
                </div>
                <div class="media-body m-3 txt-categorias align-self-center">
                  <h5 class="">Projeto Vamos Juntas</h5>
                  Sabemos que nem sempre as coisas são fáceis, ainda mais quando somos mulheres e microempreendedoras, certo?
                  É por isso que o Projeto Vamos Juntas existe. Queremos empoderar vocês por meio do conhecimento e da tecnologia, colocando seu negócio no mundo digital e expandindo seus horizontes! Mais ainda, queremos preparar você e seu negócio para crescer cada vez mais! Bora conversar, tomar um café e começar esse projeto?<br>
                  <a href="/projetoreprograma/public/projetojuntas" class="btn btn-primary btn-cat align-self-center mt-3">Saiba Mais</a>
                </div>

            </div>
          </div>

          <div class="tab-pane bg-light fade" id="pills-consultoria" role="tabpanel" aria-labelledby="pills-consultoria-tab">
            <div class="media d-flex">
                <div class="flex-column align-self-center img-categorias m-sm-2 m-md-3">
                  <img class="m-2 img-categorias align-self-center rounded-circle" src="img/carrossel1.jpg" alt="Projeto Vamos juntas consultoria para empreendedoras">
                  <a href="#" class="btn btn-primary btn-sm align-self-center m-3 d-sm-block d-md-none">Saiba Mais</a>
                </div>
                <div class="media-body m-3 txt-categorias align-self-center">
                  <h5 class="m-3">Aqui você encontra solução, não mais problemas</h5>
                  Está procurando uma solução completa para desenvolver ou expandir sua presença digital? Conte com a gente do início ao fim do processo, com transparência e pensando no que é melhor para o seu segmento.<br>
                  <a href="/projetoreprograma/public/projetojuntas" class="btn btn-primary btn-cat align-self-center mt-3">Saiba Mais</a>
                </div>
            </div>
          </div>

          <div class="tab-pane bg-light fade" id="pills-website" role="tabpanel" aria-labelledby="pills-website-tab">
            <div class="media d-flex">
                <div class="flex-column align-self-center img-categorias m-sm-2 m-md-3">
                  <img class="m-2 img-categorias align-self-center rounded-circle" src="img/categoriawebsite.jpg" alt="Generic placeholder image">
                  <a href="#" class="btn btn-primary btn-sm align-self-center m-3 d-sm-block d-md-none">Saiba Mais</a>
                </div>
                <div class="media-body m-3 txt-categorias align-self-center">
                  <h5 class="m-3">Escolha ser digital, sempre!</h5>
                  Ter um website bem estruturado, responsivo e com boas práticas para seu usuário é essencial para um bom desempenho (inclusive offline, viu?) É por isso que nossa solução traz para você a construção do seu website, podendo ser institucional ou e-commerce.<br>
                  <a href="/projetoreprograma/public/projetojuntas" class="btn btn-primary btn-cat align-self-center mt-3">Saiba Mais</a>
                </div>
            </div>
          </div>

          <div class="tab-pane bg-light fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab">
            <div class="media d-flex">
                <div class="flex-column align-self-center img-categorias m-sm-2 m-md-3">
                  <img class="m-2 img-categorias align-self-center rounded-circle" src="img/categoriamkt.jpg" alt="Generic placeholder image">
                  <a href="#" class="btn btn-primary btn-sm align-self-center m-3 d-sm-block d-md-none">Saiba Mais</a>
                </div>
                <div class="media-body m-3 txt-categorias align-self-center">
                  <h5 class="m-3">SEM, SEO e Links Patrocinados</h5>
                  Apenas um website não é o bastante para garantir seu sucesso digital e trazer resultados reais. É necessário que haja uma estratégia e que sejam aplicadas as melhores práticas de SEO, garantindo seu posicionamento orgânico e, além disso, garantir sua presença em anúncios patrocinados.<br>
                  <a href="/projetoreprograma/public/projetojuntas" class="btn btn-primary btn-cat align-self-center mt-3">Saiba Mais</a>
                </div>
            </div>
          </div>

          <div class="tab-pane bg-light fade" id="pills-dashboards" role="tabpanel" aria-labelledby="pills-dashboards-tab">
            <div class="media d-flex">
                <div class="flex-column align-self-center img-categorias m-sm-2 m-md-3">
                  <img class="m-2 img-categorias align-self-center rounded-circle" src="img/categoriadash.jpg" alt="Generic placeholder image">
                  <a href="#" class="btn btn-primary btn-sm align-self-center m-3 d-sm-block d-md-none">Saiba Mais</a>
                </div>
                <div class="media-body m-3 txt-categorias align-self-center">
                  <h5 class="">Relatórios e Dashboard</h5>
                  Já se sentiu perdido com relação aos seus resultados? Perde horas ou até dias juntando todos os seus dados para conseguir iniciar uma análise? Podemos construir dashboards gerenciais baseados nas melhores KPIs para o seu negócio, tornando o controle muito mais simples e rápido.<br>
                  <a href="/projetoreprograma/public/projetojuntas" class="btn btn-primary btn-cat align-self-center mt-3">Saiba Mais</a>
                </div>
            </div>
          </div>

          <div class="tab-pane bg-light fade" id="pills-sistemas" role="tabpanel" aria-labelledby="pills-sistemas-tab">
            <div class="media d-flex">
                <div class="flex-column align-self-center img-categorias m-sm-2 m-md-3">
                  <img class="m-2 img-categorias align-self-center rounded-circle" src="img/categoriasistema.jpg" alt="Generic placeholder image">
                  <a href="#" class="btn btn-primary btn-sm align-self-center m-3 d-sm-block d-md-none">Saiba Mais</a>
                </div>
                <div class="media-body m-3 txt-categorias align-self-center">
                  <h5 class="">Sistemas Gerenciais</h5>
                  Deseja construir um sistema de controle personalizado para sua empresa? Com cadastros específicos, tratamento de dados, metas e KPIs? Podemos construir um sistema do zero com a sua cara.
                  <br>
                  <a href="/projetoreprograma/public/projetojuntas" class="btn btn-primary btn-cat align-self-center mt-3">Saiba Mais</a>
                </div>
            </div>
          </div>

      </div>

<!-- Final dos núcleos -->
</div>





@endsection
