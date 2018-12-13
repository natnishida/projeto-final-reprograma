@extends('layouts.app')
@section('title', 'Digital Consulting')

@section('content')

<!-- Carrossel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >

        <div class="carousel-inner " >
            <div class="carousel-item active">
                <div class="carousel-caption rounded bg-dark d-none d-md-block">
                <h3 class="carrossel-legenda"><strong>Consultoria Digital</strong></h3>
                <h4 class="carrossel-sublegenda">Para o seu negócio crescer mais e mais!</h4>
                <p class="carrossel-legenda-paragrafo">Tem dúvidas sobre como trazer seu negócio para o mundo digital? Conte com a gente!</p>
                </div>
                <img class="d-block w-100" src="img/carrossel1.jpg?auto=yes&bg=777&fg=555&text=Primeiro slide" alt="Primeiro slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/carrossel2.jpg?auto=yes&bg=777&fg=555&text=Segundo slide" alt="Segundo slide">
              <div class="carousel-caption rounded bg-dark d-none d-md-block">
              <h3 class="carrossel-legenda"><strong>Construa seu Website</strong></h3>
              <h4 class="carrossel-sublegenda">Pode escolher entre institucional ou e-commerce!</h4>
              <p class="carrossel-legenda-paragrafo">Responsivo e com estratégia de SEO montada, pensando no seu segmento.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/carrossel3.jpg?auto=yes&bg=777&fg=555&text=Terceiro slide" alt="Terceiro slide">
              <div class="carousel-caption rounded bg-dark d-none d-md-block">
              <h3 class="carrossel-legenda"><strong>Dashboards e sistemas gerenciais</strong></h3>
              <h4 class="carrossel-sublegenda">Precisa controlar seus números?</h4>
              <p class="carrossel-legenda-paragrafo">Vamos definir as melhores métricas e entregar um dashboard personalizado para você nunca mais se perder!</p>
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
          <h2>Categorias que atendemos</h2>
      </div>



<!-- Início dos núcleos -->

      <ul class="container nav nav-pills d-flex flex-row justify-content-around bg-light" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-consultoria" role="tab" aria-controls="pills-consultoria" aria-selected="true">Consultoria Digital</a>
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
        <li class="nav-item">
          <a class="nav-link" id="pills-projetojuntas-tab" data-toggle="pill" href="#pills-projetojuntas" role="tab" aria-controls="pills-projetojuntas" aria-selected="false">Projeto Vamos Juntas</a>
        </li>
      </ul>
      <div class="tab-content container p-0 mb-3" id="pills-tabContent">

          <div class="tab-pane bg-light fade show active" id="pills-consultoria" role="tabpanel" aria-labelledby="pills-consultoria-tab">
            <div class="media d-flex">
                <div class="flex-column align-self-center img-categorias m-sm-1 m-md-3">
                  <img class="m-3 img-categorias align-self-center" src="img/carrossel1.jpg" alt="Generic placeholder image">
                  <img class="m-3 img-categorias align-self-center d-sm-block d-md-none" src="img/carrossel1.jpg" alt="Generic placeholder image">
                </div>
                <div class="media-body m-3 txt-categorias align-self-center">
                  <h5 class="m-3">Aqui você encontra solução, não mais problemas</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
          </div>

          <div class="tab-pane bg-light fade" id="pills-website" role="tabpanel" aria-labelledby="pills-website-tab">
            <div class="media d-flex">
                <div class="flex-column align-self-center img-categorias m-sm-1 m-md-3">
                  <img class="m-3 img-categorias align-self-center" src="img/carrossel1.jpg" alt="Generic placeholder image">
                  <img class="m-3 img-categorias align-self-center d-sm-block d-md-none" src="img/carrossel1.jpg" alt="Generic placeholder image">
                </div>
                <div class="media-body m-3 txt-categorias align-self-center">
                  <h5 class="m-3">Aqui você encontra solução, não mais problemas</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
          </div>

          <div class="tab-pane bg-light fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab">
            <div class="media d-flex">
                <div class="flex-column align-self-center img-categorias m-sm-1 m-md-3">
                  <img class="m-3 img-categorias align-self-center" src="img/carrossel1.jpg" alt="Generic placeholder image">
                  <img class="m-3 img-categorias align-self-center d-sm-block d-md-none" src="img/carrossel1.jpg" alt="Generic placeholder image">
                </div>
                <div class="media-body m-3 txt-categorias align-self-center">
                  <h5 class="m-3">Media heading</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
          </div>

          <div class="tab-pane bg-light fade" id="pills-dashboards" role="tabpanel" aria-labelledby="pills-dashboards-tab">
            <div class="media d-flex">
                <div class="flex-column align-self-center img-categorias m-sm-1 m-md-3">
                  <img class="m-3 img-categorias align-self-center" src="img/carrossel1.jpg" alt="Generic placeholder image">
                  <img class="m-3 img-categorias align-self-center d-sm-block d-md-none" src="img/carrossel1.jpg" alt="Generic placeholder image">
                </div>
                <div class="media-body m-3 txt-categorias align-self-center">
                  <h5 class="">Media heading</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
          </div>

          <div class="tab-pane bg-light fade" id="pills-sistemas" role="tabpanel" aria-labelledby="pills-sistemas-tab">
            <div class="media d-flex">
                <div class="flex-column align-self-center img-categorias m-sm-1 m-md-3">
                  <img class="m-3 img-categorias align-self-center" src="img/carrossel1.jpg" alt="Generic placeholder image">
                  <img class="m-3 img-categorias align-self-center d-sm-block d-md-none" src="img/carrossel1.jpg" alt="Generic placeholder image">
                </div>
                <div class="media-body m-3 txt-categorias align-self-center">
                  <h5 class="">Media heading</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
          </div>

          <div class="tab-pane bg-light fade" id="pills-projetojuntas" role="tabpanel" aria-labelledby="pills-projetojuntas-tab">
            <div class="media d-flex">
                <div class="flex-column align-self-center img-categorias m-sm-1 m-md-3">
                  <img class="m-3 img-categorias align-self-center" src="img/carrossel1.jpg" alt="Generic placeholder image">
                  <img class="m-3 img-categorias align-self-center d-sm-block d-md-none" src="img/carrossel1.jpg" alt="Generic placeholder image">
                </div>
                <div class="media-body m-3 txt-categorias align-self-center">
                  <h5 class="">Media heading</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
          </div>

      </div>

<!-- Final dos núcleos -->
</div>





@endsection
