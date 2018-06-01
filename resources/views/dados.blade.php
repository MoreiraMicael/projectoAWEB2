@extends('layouts.app')

@section('content')
<h1>Dados</h1>
{!! Form::open(['url' => 'dados/submit', 'method' => 'post']) !!}
  <div class="form-group">
    {{Form::label('nome', 'Nome:  ')}}
    <?php echo Auth::user()->name ?>
  </div>
  <div class="form-group">
    {{Form::label('email', 'Email:  ')}}
    <?php echo Auth::user()->email ?>
  </div>
  <div class="form-group">
    {{Form::label('numero', 'Utente Numero:  ')}}
    <?php echo Auth::user()->id ?>
  </div>
{!! Form::close() !!}
@endsection
