@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex flex-column">

      @if (session('status'))
          <div class="alert alert-success container-fluid" role="alert">
            </div>
      @endif
      <div class="alert alert-success">
							<p>Legal, {{ Auth::user()->name }}!! Vamos ver seus resultados!?</p>
			</div>
      @isset($msg)

					<div class="alert alert-success">
							{{ $msg }}
					</div>

			@endisset

  <input type="hidden" name="email" value="{{ Auth::user()->email }}">

      <div class="quizpergunta1 container-fluid rounded bg-light">

                  <div class="row">

                    <div class="col-sm-6 p-5 d-flex d-flex flex-column">

                        <h3 style="text-align: right">Você respondeu: <br>
                          @isset($respostaEstoque)
                        {{ $respostaEstoque }}
                        @endisset</h3>
                        <br>
                        <div class="form-check d-flex justify-content-start">
                          @isset($resultadoEstoque)
                          {{ $resultadoEstoque }}
                          @endisset
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 quizimg1 d-flex justify-content-center">
                        <div class="w-50 divquiz bg-light rounded p-3 align-self-center">
                            <h3>Controle de estoque</h3>
                        </div>
                    </div>
                  </div>
      </div>
  <!-- Fim da pergunta 1 -->

  <!-- Pergunta 2 -->

        <div class="quizpergunta1 container-fluid rounded bg-light">

                    <div class="row">

                    <div class="col-sm-12 col-md-6 quizimg2 d-flex justify-content-center">
                          <div class="w-50 divquiz bg-light rounded p-3 align-self-center">
                              <h3>Presença Digital?</h3>
                          </div>
                      </div>
                      <div class="col-sm-6 p-5 d-flex d-flex flex-column">

                          <h3 style="text-align: right">Você respondeu: <br>
                            @isset($respostaDigital)
                          {{ $respostaDigital }}
                          @endisset</h3>
                          <br>
                          <div class="form-check d-flex justify-content-start">
                            @isset($resultadoDigital)
                            {{ $resultadoDigital }}
                            @endisset
                          </div>
                      </div>
                    </div>

        </div>
    <!-- Fim da pergunta 2 -->

    <!-- Pergunta 3 -->
          <div class="quizpergunta1 container-fluid rounded bg-light">

                      <div class="row">

                        <div class="col-sm-6 p-5 d-flex d-flex flex-column">

                          <h3 style="text-align: right">Você respondeu: <br>
                            @isset($respostaFinanceiro)
                          {{ $respostaFinanceiro }}
                          @endisset</h3>
                          <br>
                          <div class="form-check d-flex justify-content-start">
                            @isset($resultadoFinanceiro)
                            {{ $resultadoFinanceiro }}
                            @endisset
                          </div>

                        </div>
                        <div class="col-sm-12 col-md-6 quizimg3 d-flex justify-content-center">
                            <div class="w-50 divquiz bg-light rounded p-3 align-self-center">
                                <h3>Gestão Financeira</h3>
                            </div>
                        </div>
                      </div>

          </div>
          <!-- Fim da pergunta 3 -->
<a href="/projetoreprograma/public/contato" class="btn btn-primary btn-cat align-self-center w-40 m-5">Entre em contato que podemos te ajudar!</a>

</div>
@endsection
