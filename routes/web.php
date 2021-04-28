<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//funcion anonima
//callback
Route::get('variables', function(){
    //definir una variable
    //en php
    $mensaje = 20;
    //funcion var_dump:analizar una variable
    //muestra tipo de dato y valor
    print_r($mensaje);
    echo"<hr />";
    $mensaje=true;
    var_dump($mensaje);
});
Route:: get('arreglos' , function(){
    //Arreglo: estructura de datos
    $estudiantes = ["AN"=>"Ana" ,
                    "MA"=>"Maria" ,
                    "SE"=>"Sebas"];
        echo"<pre>";
    var_dump($estudiantes);
        echo"</pre>";
});

//
// Fuertemente Tipados: Debe definir eñ tipo de dato
//                      No se puede cambiar el tipo de dato
//                      JAVA, .NET, GO
//Debilmente Tipados: No se requiere definir el tipo de dato
//                    Puedes cambiar el tipo de dato
//                    PHP, JAVASCRIPT, PHYTON

Route:: get("paises" , function(){
    $paises=[   "Colombia" =>[
                            "capital"  =>"Bogotá",
                            "moneda"   =>"Peso",
                            "poblacion"=>50
                             ],
                "Peru"     =>[
                            "capital"  =>"Lima",
                            "moneda"   =>"Sol",
                            "poblacion"=>32.8
                             ],
                "Paraguay" =>[
                            "capital"  =>"Asunción",
                            "moneda"   =>"Guaraní",
                            "poblacion"=>7.3
                             ]
            ];
    $suma = 0;
    foreach($paises as $nombre => $pais){
       $suma += $pais ["poblacion"];
    }
    echo"La suma de los paises es $suma";




});
