<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Trainer;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search2(Request $request)
    {

$error = ['Entrenador fuera de existencia' => 'No hay resultados para esta busqueda.'];

if($request->has('text')) {

    $Trainers = Trainer::search2($request->get('text'))->get();

    return $Trainers-> count() ?  $Trainers : $error;

    }
    return $error;
}

public function search(Request $request)
{
    $busqueda = $request->input("text");

    $resultados = Trainer::search($busqueda)->get();

    return view('vista1', [
        "busqueda" => $busqueda,
        "resultados" => $resultados
    ]);
}

}
?>
