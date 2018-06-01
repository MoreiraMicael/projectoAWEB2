@extends('layouts.app')

@section('content')
<h1>Utentes</h1>

Utentes:
<br>
<table>
  <thead>
    <th>id</th>
    <th>Nome</th>
    <th>Email</th>
    <th></th>
  </thead>
  <tbody>
    @foreach ($user as $key => $data)
      <tr>
        <form class="" action="{{ route('utentes.assign')}}" method="post">
          <td>{{$data->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td><input type="checkbox" {{$user->hasRole('Utente') ? 'checked' : ''}}name = "role_utente"></td>
          <td><input type="checkbox" {{$user->hasRole('Profissional') ? 'checked' : ''}}name = "role_ps"></td>
          <td><input type="checkbox" {{$user->hasRole('Admin') ? 'checked' : ''}}name = "role_admin"></td>
          {{csrf_field()}}
          <td><button type="submit">Atribuir Permissões</button></td>
        </form>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('sidebar')
<p>sidebar hemograma</p>
@endsection
