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
      $msg_estoque1 = "Isso é bem perigoso e pode te levar a perder vendas ou, até pior, vender algo que você não tenha estoque! De qualquer forma você perde a credibilidade com seu consumidor. Você já imaginou ter um sistema que você possa fazer esse controle e ainda que pode te avisar quando um produto está acabando? Podemos te ajudar!";
      $resp_digital1 = "Não tenho site, nem sou ativa nas redes sociais.";
      $msg_digital1 = "Quando você não tem presença digital, você limita seu alcance apenas a pessoas que passam na frente do seu estabelecimento ou depende muito da propaganda boca a boca. Com presença digital, qualquer pessoa pode descobrir seu site e se interessar pelos seus prontos. Imagine as possibilidades de crescimento!";
      $resp_financeiro1 = "Não consigo fazer há um tempo.";
      $msg_financeiro1 = "De todas as questões, acredito que essa seja a mais preocupante. Isso porque, quando a gente se perde e não consegue achar tempo para cuidar das finanças, todo mês vira uma roleta russa e nunca conseguimos crescer, porque acabamos ficando sempre no zero a zero. E se eu te disser que você consegue esse controle financeiro de forma automatizada? Quer saber mais?";
      return view('resultados',
      ['resultadoDigital' => $msg_digital1,
        'respostaDigital' => $resp_digital1,
        'resultadoEstoque' => $msg_estoque1,
        'respostaEstoque' => $resp_estoque1,
        'resultadoFinanceiro' => $msg_financeiro1,
        'respostaFinanceiro' => $resp_financeiro1]);
    }
    }

    public function enviacontato(Request $r){
      if($r->isMethod('get')) {
        return view('contato');
      }
      return view('contato',
    [
      'msg' => "Mensagem enviada com sucesso, em até 48 horas a gente te retorna, ok?"
    ]);
    }
}
