<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Quiz as Quiz;
use \App\User;

class FunctionController extends Controller
{
  public function projetojuntas()
  {
      return view('projetojuntas');
  }

  public function guardaresultados(Request $r)
  {
      if ($r->isMethod('get')) {
        return view('home');
    }

    $nova_resposta = new Quiz;
    $nova_resposta->useremail = $r->input('email');
    $nova_resposta->quizestoque = $r->input('estoque');
    $nova_resposta->quizdigital = $r->input('digital');
    $nova_resposta->quizfinanceiro = $r->input('financeiro');

    if ($nova_resposta->save()) {
        $r->session()->put('resposta', $nova_resposta);
      return redirect()->action('FunctionController@mostraresultados');
    } else {
      return view('home',
      array('msg' => 'Verifique suas respostas.'));
    }
  }

  public function mostraresultados(Request $r){
    $nova_resposta = $r->session()->get('resposta');

    $resposta = Quiz::find(($nova_resposta['useremail']));


    if($nova_resposta['quizestoque'] == "1-ficosem" && $nova_resposta['quizdigital'] == "1-sem-site-nem-fb" && $nova_resposta['quizfinanceiro'] == "1-ficosem"){
      $resp_estoque1 = "Compro quando sinto falta de algo e com frequência fico sem estoque.";
      $msg_estoque1 = "Isso é bem perigoso e pode te levar a perder vendas ou, até pior, vender algo que você não tenha estoque! De qualquer forma você perde a credibilidade com seu consumidor :(";
      $resp_digital1 = "Compro quando sinto falta de algo e com frequência fico sem digital.";
      $msg_digital1 = "Isso é bem perigoso e pode te levar a perder vendas ou, até pior, vender algo que você não tenha digital! De qualquer forma você perde a credibilidade com seu consumidor :(";
      $resp_financeiro1 = "Compro quando sinto falta de algo e com frequência fico sem financeiro.";
      $msg_financeiro1 = "Isso é bem perigoso e pode te levar a perder vendas ou, até pior, vender algo que você não tenha digital! De qualquer forma você perde a credibilidade com seu consumidor :(";
      return view('resultados',
      ['resultadoDigital' => $msg_digital1,
        'respostaDigital' => $resp_digital1,
        'resultadoEstoque' => $msg_estoque1,
        'respostaEstoque' => $resp_estoque1,
        'resultadoFinanceiro' => $msg_financeiro1,
        'respostaFinanceiro' => $resp_financeiro1]);
    }
    }
}
