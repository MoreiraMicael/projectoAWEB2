<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DadosController extends Controller
{
    public function submit(Request $request){
      $this->validate($request, [
        'nome' => 'required',
        'email' => 'required',
        'data' => 'required'
      ]);

      return 'Success';

    }
}
