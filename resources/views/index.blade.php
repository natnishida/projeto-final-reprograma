@extends('layouts.app')
@section('title', 'Digital Consulting')

@section('content')

<!-- Carrossel -->
<div class="">


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
</div>
<!-- Fim do carrossel -->

@endsection
