@extends('layouts.app')
@section('title', 'Digital Consulting')

@section('content')

<!-- Carrossel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >

        <div class="carousel-inner " >
            <div class="carousel-item active" style="height: 88vh">
                <div class="carousel-caption rounded bg-dark d-none d-md-block">
                <h3 class="carrossel-legenda"><strong>Consultoria Digital</strong></h3>
                <h4 class="carrossel-sublegenda">Para o seu negócio crescer mais e mais!</h4>
                <p class="carrossel-legenda-paragrafo">Tem dúvidas sobre como trazer seu negócio para o mundo digital? Conte com a gente!</p>
                </div>
                <img class="d-block w-100" src="img/carrossel1.jpg?auto=yes&bg=777&fg=555&text=Primeiro slide" alt="Primeiro slide">
            </div>
            <div class="carousel-item" style="height: 88vh">
              <img class="d-block w-100" src="img/carrossel2.jpg?auto=yes&bg=777&fg=555&text=Segundo slide" alt="Segundo slide">
              <div class="carousel-caption rounded bg-dark d-none d-md-block">
              <h3 class="carrossel-legenda"><strong>Construa seu Website</strong></h3>
              <h4 class="carrossel-sublegenda">Pode escolher entre institucional ou e-commerce!</h4>
              <p class="carrossel-legenda-paragrafo">Responsivo e com estratégia de SEO montada, pensando no seu segmento.</p>
              </div>
            </div>
            <div class="carousel-item" style="height: 88vh">
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

<div class="parallax">

</div>

<!-- Início dos núcleos -->

<ul class="nav nav-pills mb-3 d-flex flex-row justify-content-around" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Consultoria Digital</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Construção de Website</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">SEO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Dashboards</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Sistemas Gerenciais</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Projeto Vamos Juntas</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Consultoria Digital</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Construção de Website</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">SEO</div>
</div>

<!-- Final dos núcleos -->






@endsection
