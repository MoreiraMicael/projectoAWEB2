@extends('layouts.app')

@section('content')
<h1>Hemograma</h1>
<h2>Adicionar Hemograma</h2>

<form method="post" action="/hemograma" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group row">
    <label for="utente" class="col-sm-3 col-form-label">Utente *escolher utente</label>
    <div class="col-sm-9">
      <input name="user_id" type="number" class="form-control" id="utenteid" placeholder="id do utente">
    </div>
  </div>
  <div class="form-group row">
    <label for="parametro1" class="col-sm-3 col-form-label">Parametro 1</label>
    <div class="col-sm-9">
      <input name="parametro1" type="text" class="form-control" id="parametro1id"
      placeholder="Parametro 1">
    </div>
    <div class="form-group row">
      <label for="parametro2" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro2" type="text" class="form-control" id="parametro2id"
        placeholder="Parametro 2">
      </div>
    </div>
    <div class="form-group row">
      <label for="parametro3" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro3" type="text" class="form-control" id="parametro3id"
        placeholder="Parametro 3">
      </div>
    </div>
    <div class="form-group row">
      <label for="parametro4" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro4" type="text" class="form-control" id="parametro4id"
        placeholder="Parametro 4">
      </div>
    </div>
    <div class="form-group row">
      <label for="parametro5" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro5" type="text" class="form-control" id="parametro5id"
        placeholder="Parametro 5">
      </div>
    </div>
    <div class="form-group row">
      <label for="parametro6" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro6" type="text" class="form-control" id="parametro6id"
        placeholder="Parametro 6">
      </div>
    </div>
    <div class="form-group row">
      <label for="parametro7" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro7" type="text" class="form-control" id="parametro7id"
        placeholder="Parametro 7">
      </div>
    </div>
    <div class="form-group row">
      <label for="parametro8" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro8" type="text" class="form-control" id="parametro8id"
        placeholder="Parametro 8">
      </div>
    </div>
    <div class="form-group row">
      <label for="parametro9" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro9" type="text" class="form-control" id="parametro9id"
        placeholder="Parametro 9">
      </div>
    </div>
    <div class="form-group row">
      <label for="parametro10" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro10" type="text" class="form-control" id="parametro10id"
        placeholder="Parametro 10">
      </div>
    </div>
    <div class="form-group row">
      <label for="parametro11" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro11" type="text" class="form-control" id="parametro11id"
        placeholder="Parametro 11">
      </div>
    </div>
    <div class="form-group row">
      <label for="parametro12" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro12" type="text" class="form-control" id="parametro12id"
        placeholder="Parametro 12">
      </div>
    </div>
    <div class="form-group row">
      <label for="parametro13" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro13" type="text" class="form-control" id="parametro13id"
        placeholder="Parametro 13">
      </div>
    </div>
    <div class="form-group row">
      <label for="parametro14" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro14" type="text" class="form-control" id="parametro14id"
        placeholder="Parametro 14">
      </div>
    </div>
    <div class="form-group row">
      <label for="parametro15" class="col-sm-3 col-form-label">Parametro 1</label>
      <div class="col-sm-9">
        <input name="parametro15" type="text" class="form-control" id="parametro15id"
        placeholder="Parametro 1">
      </div>
    </div>
    <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submeter Resultados</button>
            </div>
        </div>
  </form>
  @endsection

  @section('sidebar')
  <p>sidebar hemograma</p>
  @endsection
