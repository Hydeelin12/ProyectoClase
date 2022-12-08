<!--<html>
    <head>
        <title>

         </title>
    </head>
    <body>
       <p>Hola mundo desde mi primer vista </p>
    </body>
</html> -->
<!-- Añadido el 27-09-22 -->
@extends('layouts.app')
@section('title','Trainers')
@section('content')
<body style="background-color:#25BEEB ;">
    <form class="form-group" method="POST" action="{{action('TrainerController@update', $trainer->id)}}"
     enctype="multipart/form-data">
     @method('PUT')
    @csrf
     <div clas="form-group">
        <label for="">Nombre:</label>
        <input type="text" name="name" value="{{$trainer->name}}"class="form-control">
        <label for="">Apellido</label>
        <input type="text" name="Apellido" value="{{$trainer->Apellido}}"class="form-control">
</div>
<div class="form-group">
    <label for="">Avatar:</label>
    <input type="file"name="avatar" value="{{$trainer->Avatar}}">

</div>
<button type="submit"class="btn btn-primary">
    Editar</button>
</body>
</form>
@endsection