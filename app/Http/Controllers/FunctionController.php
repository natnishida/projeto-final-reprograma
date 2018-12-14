<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\User;

class FunctionController extends Controller
{
  public function projetojuntas()
  {
      return view('projetojuntas');
  }


}
