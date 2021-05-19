<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //cliente
    public function formulario_buscador(){
        //mostrar formulario del metabuscador
        return view ('metabuscador');
    }
    //servidor: Llegan los datos
    public function buscar(){
        //1. alamacenar los datos trasmitidos en otras variables

        $termino=$_POST["termino"];
        $motores=$_POST["motores"];
        //1. Identificar el motor  de busqueda elejido elegido
        switch($motores){
            case 1: //redireccionar la direccion de google de busqueda
                return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2:
                return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3:
                return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;
            case 4:
                return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 5:
                return redirect()->to("https://yandex.com/search/?text=$termino");
                break;
            case 6:
                return redirect()->to("https://www.ask.com/web?q=$termino");
                break;
            case 7:
                return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
            case 8:
                return redirect()->to("https://search.aol.com/aol/search?q=$termino");
                break;
            case 9:
                return redirect()->to("https://www.amazon.com/s?k=$termino");
                break;
            case 10:
                return redirect()->to("https://www.google.com/maps/search/$termino");
                break;
        }


        //print_r($_POST);

    }

}
