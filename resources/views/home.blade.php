@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex flex-column">

      @if (session('status'))
          <div class="alert alert-success container-fluid" role="alert">
            </div>
      @endif
      <div class="w-100 container-fluid alert alert-success">
							<p>Olá, {{ Auth::user()->name }}!! Que bom ver você por aqui! Vamos juntas!?</p>
			</div>

<form class="" action="index.html" method="post">
  <!-- Pergunta 1 -->
      <div class="quizpergunta1 container-fluid rounded bg-light">
            <fieldset class="form-group">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 quizimg1 d-flex justify-content-center">
                        <div class="w-50 divquiz bg-light rounded p-3 align-self-center">
                            <h3>Controle de estoque</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 p-5 d-flex d-flex flex-column">

                        <h3 style="text-align: right">Como você faz seu controle de estoque?</h3>
                        <br>
                        <div class="form-check d-flex justify-content-start">

                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1-ficosem" checked>
                          <label class="form-check-label" for="gridRadios1" style="text-align: left">
                            Compro quando sinto falta de algo e com frequência fico sem estoque.
                          </label>
                        </div>
                        <div class="form-check d-flex justify-content-start">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2-olho">
                          <label class="form-check-label" for="gridRadios2"  style="text-align: left">
                            Faço no olho e compro quando vejo que está acabando.
                          </label>
                        </div>
                        <div class="form-check d-flex justify-content-start">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3-caderno">
                          <label class="form-check-label" for="gridRadios3" style="text-align: left">
                            Anoto tudo em um caderno.
                          </label>
                        </div>
                        <div class="form-check d-flex justify-content-start">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4-planilha">
                          <label class="form-check-label" for="gridRadios4"  style="text-align: left">
                            Tenho uma planilha!
                          </label>
                        </div>
                        <div class="form-check d-flex justify-content-start">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios5" value="5-software">
                          <label class="form-check-label" for="gridRadios5"  style="text-align: left">
                            Através de um software de controle de estoque.
                          </label>
                        </div>
                    </div>
                  </div>
            </fieldset>

      </div>
  <!-- Fim da pergunta 1 -->

  <!-- Pergunta 2 -->

        <div class="quizpergunta1 container-fluid rounded bg-light">
              <fieldset class="form-group">
                    <div class="row">

                      <div class="col-sm-6 p-5 d-flex d-flex flex-column">

                          <h3 style="text-align: right">Como é sua presença digital?</h3>
                          <br>
                          <div class="form-check d-flex justify-content-start">

                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1-sem-site-nem-fb" checked>
                            <label class="form-check-label" for="gridRadios1" style="text-align: left">
                              Não tenho site, nem sou ativa nas redes sociais.
                            </label>
                          </div>
                          <div class="form-check d-flex justify-content-start">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2-facebook">
                            <label class="form-check-label" for="gridRadios2"  style="text-align: left">
                              Não tenho site, mas uso minha página do Facebook.
                            </label>
                          </div>
                          <div class="form-check d-flex justify-content-start">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3-site-ruim">
                            <label class="form-check-label" for="gridRadios3" style="text-align: left">
                              Tenho um site, mas não faz vendas e não é chamativo.
                            </label>
                          </div>
                          <div class="form-check d-flex justify-content-start">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4-site-institucional">
                            <label class="form-check-label" for="gridRadios4"  style="text-align: left">
                              Tenho um site chamativo e legal, mas que não faz vendas.
                            </label>
                          </div>
                          <div class="form-check d-flex justify-content-start">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios5" value="5-ecommerce">
                            <label class="form-check-label" for="gridRadios5"  style="text-align: left">
                              Tenho um site funcional, que faz vendas.
                            </label>
                          </div>
                      </div>

                      <div class="col-sm-12 col-md-6 quizimg2 d-flex justify-content-center">
                          <div class="w-50 divquiz bg-light rounded p-3 align-self-center">
                              <h3>Presença Digital?</h3>
                          </div>
                      </div>
                    </div>
              </fieldset>

        </div>
    <!-- Fim da pergunta 2 -->

    <!-- Pergunta 3 -->
          <div class="quizpergunta1 container-fluid rounded bg-light">

                <fieldset class="form-group">
                      <div class="row">
                        <div class="col-sm-12 col-md-6 quizimg3 d-flex justify-content-center">
                            <div class="w-50 divquiz bg-light rounded p-3 align-self-center">
                                <h3>Gestão Financeira</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 p-5 d-flex d-flex flex-column">

                            <h3 style="text-align: right">Como você faz seu controle financeiro?</h3>
                            <br>
                            <div class="form-check d-flex justify-content-start">

                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1-ficosem" checked>
                              <label class="form-check-label" for="gridRadios1" style="text-align: left">
                                Não consigo fazer há um tempo.
                              </label>
                            </div>
                            <div class="form-check d-flex justify-content-start">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2-olho">
                              <label class="form-check-label" for="gridRadios2"  style="text-align: left">
                                Olho minha conta no final do mês e vejo se está positiva ou negativa.
                              </label>
                            </div>
                            <div class="form-check d-flex justify-content-start">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3-caderno">
                              <label class="form-check-label" for="gridRadios3" style="text-align: left">
                                Anoto meus gastos e ganhos em um caderno.
                              </label>
                            </div>
                            <div class="form-check d-flex justify-content-start">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4-planilha">
                              <label class="form-check-label" for="gridRadios4"  style="text-align: left">
                                Tenho uma planilha, mas não atualizo com frequência.
                              </label>
                            </div>
                            <div class="form-check d-flex justify-content-start">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios5" value="5-software">
                              <label class="form-check-label" for="gridRadios5"  style="text-align: left">
                                Tenho uma planilha ou sistema e atualizo todos os dias com gastos e ganhos.
                              </label>
                            </div>
                        </div>
                      </div>
                </fieldset>
          </div>
          <!-- Fim da pergunta 3 -->
          <button type="submit" name="buttonform" class="btn btn-primary w-30 btn-cat mt-3 mb-5">Envie suas respostas</button>
        </form>


</div>
@endsection
