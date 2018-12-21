@extends('template.base')

@section('title')
Contactanos
@endsection

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <h1>Contactanos</h1>
      <div class="text">
        <br>
        <h3>Escribinos vía e-mail:</h3>
        dhelectronics@digitalhouse.com
        <br><br><br>
        <h3>O comunicate por teléfono:</h3>
        Sede Lima y Monroe:  +54 11 5263-7400
      </div>
    </div>
  </div>
</div>
@endsection
@section('moreCss')
<link rel="stylesheet" href={{ asset('/css/contacts.css') }}>
@endsection
