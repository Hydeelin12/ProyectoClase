<!--<html>
    <head>
        <title>

         </title>
    </head>
    <body>
       <p>Hola mundo desde mi primer vista dahyana jug</p>
    </body>
</html> -->
<!-- Añadido el 27-09-22 -->
@extends('layouts.app')
@section('title','Trainers')
@section('content')
@csrf

<body style="background-color:#25BEEB ;">

    <p>Listado de Trainers</p>

    <form action="api/search" method="GET" target="_blank">

<p>

Búsqueda: <input type="search" name="text" placeholder="Nombre del trainer...">

<input type="submit" value="Buscar">

</p>
    <div class="row">
    @foreach ($trainers as $trainer)
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img style="height: 100px; width: 100px;
  background-color: #EFEFEF; margin: 20px;
  "class="card-img-top rounded-circle mx-auto d-block"
  src="images/{{$trainer->Avatar}}"alt="">
  <div class="card-body">
    <h5 class="card-title">{{$trainer->name}}</h5>
    <h5 class="card-title">{{$trainer->Apellido}}</h5>
    <p class="card-text">Descripción de ejemplo</p>
    <button type="submit"class="btn btn-primary">
    Guardar</button>


    <a href="/trainers/{{$trainer->id}}/edit" class="btn btn-primary">Modificar</a>
    <a href="/delete/{{$trainer->id}}" class="btn btn-primary">Borrar</a>
    <a href="trainers/{{$trainer->id}}"class="btn btn-secondary">Mostrar</a>

</form>
  </div>
</div>
</body>
</div>
@endforeach
</div>

