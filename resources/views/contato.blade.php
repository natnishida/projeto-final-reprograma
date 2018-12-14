@extends('layouts.app')

@section('content')
<div class="container p-5">
  @isset($msg)

      <div class="alert alert-success">
          {{ $msg }}
      </div>

  @endisset
        <form class="" action="{{ route('contato') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput2" style="text-align: left">Nome</label>
              <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Nome Completo">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1" style="text-align: left">E-mail</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="e-mail@exemplo.com.br">
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1" style="text-align: left">Tipo de contato</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Informações</option>
                <option>Dúvidas</option>
                <option>Projeto Juntas</option>
                <option>Consultoria</option>
                <option>Outros Núcleos</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1" style="text-align: left">Mensagem:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="submit" name="buttonform" class="btn btn-primary w-30 btn-cat mt-3 mb-5">Envie sua mensagem</button>
      </form>
</div>
@endsection
