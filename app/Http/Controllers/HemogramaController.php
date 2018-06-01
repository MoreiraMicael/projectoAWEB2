<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hemograma;

class HemogramaController extends Controller
{
    public function index(){
      $hemograma = \App\Hemograma::all();
      return view('hemograma.index', ['hemograma' => $hemograma]);
    }

    public function show(Hemograma $id)
    {
        return view('hemograma.show', ['hemograma' => $id]);
    }

    public function create()
    {
        return view('createHemograma');
    }

    public function store()
    {
      $hemograma = new Hemograma;
      $hemograma->user_id = request('user_id');
      $hemograma->parametro1 = request('parametro1');
      $hemograma->parametro2 = request('parametro2');
      $hemograma->parametro3 = request('parametro3');
      $hemograma->parametro4 = request('parametro4');
      $hemograma->parametro5 = request('parametro5');
      $hemograma->parametro6 = request('parametro6');
      $hemograma->parametro7 = request('parametro7');
      $hemograma->parametro8 = request('parametro8');
      $hemograma->parametro9 = request('parametro9');
      $hemograma->parametro10 = request('parametro10');
      $hemograma->parametro11 = request('parametro11');
      $hemograma->parametro12 = request('parametro12');
      $hemograma->parametro13 = request('parametro13');
      $hemograma->parametro14 = request('parametro14');
      $hemograma->parametro15 = request('parametro15');
      $hemograma->save();
    }
}
