<!--<html>
    <head>
        <title>

         </title>
    </head>
    <body>
       <p>Hola mundo desde mi primer vista </p>
    </body>
</html> -->
@extends('layouts.app')
@section('title', 'Trainers Create')
@section('content')
<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data"> 
    @csrf
    <body style="background-color:#25BEEB ;">
</body>
         <div clas='form-group'>
             <label for=''>Nombre</label>
             <input type='text'name="name"class='form-control'>
             <label for=''>Apellido</label>
             <input type='text'name="Apellido"class='form-control'>
         </div>
         <div clas='form-group'>
            <label for="">Avatar:</label>
            <input type="file" name="avatar">
        </div>
         <button type='submit'class='btn btn-primary'>
        Guardar</button>
        </body>
</form>
@endsection