@extends('layouts.app')

@section('template_title')
    Trainer
@endsection

@section('content')
<body style="background-color:#25BEEB;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                               <h5> {{ __('Vista para búsquedas de Trainers') }}</h5>
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                    <h6 class="font-semibold text-2xl text-gray-800">Resultados para "{{$busqueda}}":</h6>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>      
                                        <tr>
                                            <td> 
                                                </form>
                                            </td>
                                        </tr>
                                    </p>
                                    <section class="container mx-auto p-4 m-4">
                                        @if (count($resultados) > 0)
                                            @foreach ($resultados as $resultado)
                                            <li>Nombre: {{$resultado->name}}</li>
                                            <li>Apellidos: {{$resultado->Apellido}}</li>
                                            <li>Avatar: <img style="height: 100px; width: 100px;
                                            background-color: #EFEFEF; margin: 20px;
                                            "class="card-img-top rounded-circle mx-auto d-block"
                                            src="\images\{{$resultado->Avatar}}"alt=""></li>
                                            <P>
                                            @endforeach
                                        @else

                                        No se encontraron Trainers para esta búsqueda
                                        @endif
                                    </section>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    </body>
@endsection





</body>
