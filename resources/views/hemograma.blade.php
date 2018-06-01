@extends('layouts.app')

@section('content')
<h1>Hemograma</h1>

Hemogramas:

<br>
    @foreach($hemograma as $key => $data)
    <tr>
      Utente:
      <th>{{$data->user_id}}</th><br>
      parametro 1:
      <th>{{$data->parametro1}}</th><br>
      parametro 2:
      <th>{{$data->parametro2}}</th><br>
      parametro 3:
      <th>{{$data->parametro3}}</th><br>
      parametro 4:
      <th>{{$data->parametro4}}</th><br>
      parametro 5:
      <th>{{$data->parametro5}}</th><br>
      parametro 6:
      <th>{{$data->parametro6}}</th><br>
      parametro 7:
      <th>{{$data->parametro7}}</th><br>
      parametro 8:
      <th>{{$data->parametro8}}</th><br>
      parametro 9:
      <th>{{$data->parametro9}}</th><br>
      parametro 10:
      <th>{{$data->parametro10}}</th><br>
      parametro 11:
      <th>{{$data->parametro11}}</th><br>
      parametro 12:
      <th>{{$data->parametro12}}</th><br>
      parametro 13:
      <th>{{$data->parametro13}}</th><br>
      parametro 14:
      <th>{{$data->parametro14}}</th><br>
      parametro 15:
      <th>{{$data->parametro15}}</th><br>
      <br>
      <br>
    </tr>
    @endforeach
@endsection

@section('sidebar')
<p>sidebar hemograma</p>
@endsection
