@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @if (Auth::check())
      <div class="card">
        <div class="card-header">Olá {{Auth::user()->name}} !</div>
        <div class="card-body">
          <div class="alert alert-success">
            {{ session('success') }}
            Login Realizado com Successo!
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</div>
@endsection
