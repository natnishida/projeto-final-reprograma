<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Special+Elite|Unica+One|Play|Rajdhani|Roboto+Slab|Nunito|Raleway" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <!-- Menu com logo e login / register -->
          <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="padding: 0">
            
                  <a id="logonavbar" href="/projetoreprograma/public/"><img src="../public/img/logo.jpg" alt="" class="navbar-brand" style="height: 10vh"/> Digital Consulting</a>

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <!-- Left Side Of Navbar -->
                      <ul class="navbar-nav mr-auto">


                            <li class="nav-item">
                              <a class="nav-link" href="/cross373/public/#sobre">Sobre</a>
                            </li>

                            <li class="nav-item">
                              <a class="nav-link" href="/cross373/public/contato">Contato</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Store</a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/cross373/public/storeplanos">Planos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/cross373/public/store">Produtos Fitness</a>
                              </div>
                            </li>

                      </ul>

                      <!-- Right Side Of Navbar -->
                      <ul class="navbar-nav ml-auto">
                          <!-- Authentication Links -->
                          @guest
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                              <li class="nav-item">
                                  @if (Route::has('register'))
                                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                  @endif
                              </li>
                          @else
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                          @endguest
                      </ul>
                  </div>

          </nav>

        <main>
            @yield('content')
        </main>

        <footer class="page-footer font-small bg-dark" style="color:#FFF;">
            <div class="newsletter row col-lg-12">
              <div class="textonews row col-lg-5">
                  <p>Inscreva-se na nossa newsletter!</p>
              </div>
              <div class="col-lg-7 col-md-12">
                    <form action="" method="POST">
                       <div class="form-row">
                            <div class="form-group col-lg-3 col-md-5">
                              <input type="text" class="form-control" id="inputNome" placeholder="Nome">
                            </div>
                            <div class="form-group col-lg-3 col-md-5">
                              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <button type="submit" class="btn btn-dark" style="height:38px;">Cadastrar-se</button>
                        </div>
                    </form>
              </div>
            </div>

            <div class="container conecte_footer">
              Conecte-se em nossas redes sociais!
            </div>
            <div class="imgicone">
              <a href=""><img src="img/face.png" width="35px;"></a>
              <a href=""><img src="img/inst.png" width="35px;"></a>
              <a href=""><img src="img/email2.png" width="35px;"></a>
            </div>


            <div class="fundofooter container text-center text-md-left mt-5">
                <div class="row mt-3">

                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Cross 373</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>Somos mais que uma academia convencional , somos um centro de treinamento.

                            Temos a melhor estrutura de Treinamento Funcional e Lutas da região.</p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 linksfooter">
                        <h6 class="text-uppercase font-weight-bold">Produtos</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                          <a href="#!">Planos</a>
                        </p>
                        <p>
                          <a href="#!">Produtos Fitness</a>
                        </p>
                        <p>
                          <a href="#!">Link1</a>
                        </p>
                        <p>
                          <a href="#!">Link2</a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 linksfooter">
                        <h6 class="text-uppercase font-weight-bold">Links úteis</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                          <a href="#!">Sua conta</a>
                        </p>
                        <p>
                          <a href="#!">Horários</a>
                        </p>
                        <p>
                          <a href="#!">Sobre</a>
                        </p>
                        <p>
                          <a href="#!">FAQ</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase font-weight-bold">Contato</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p> Av. Nossa Senhora </p>
                        <p>da Encarnação, 373</p>
                        <p>Jd. Maria Estela, SP</p>
                        <p>+ 11 9999-9999</p>
                    </div>

                </div>

            </div>

            <div class="footer-copyright text-center py-3">© 2018 Copyright:
              <a href="#"> www.cross373.com</a>
            </div>


        </footer>

    </div>
</body>
</html>
