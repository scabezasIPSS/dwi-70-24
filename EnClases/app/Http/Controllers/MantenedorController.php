<?php

namespace App\Http\Controllers;

use App\Models\MantenedorModel;
use Illuminate\Http\Request;

class MantenedorController extends Controller
{
    public function get($_id){
        if($_id == NULL){
            //retorno todo
        }else{
            //busca por el id
        }
    }

    public function new($_nuevo){
        //crear el objeto nuevo
        $nuevo = new MantenedorModel();
    }

    public function update($_nuevo){ //no nos debemos olvidar setear el ID para poder buscar el objeto

    }
    /*public function update($_id, $_nuevo){

    }*/
    public function delete($_id){
        //para eliminar
    }
}