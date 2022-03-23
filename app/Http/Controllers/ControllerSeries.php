<?php

namespace App\Http\Controllers;

use http\Env\Request;

class ControllerSeries extends Controller
{
    function Series (){
        $series = [
            'Welliton',
            'Valeria',
            'Nicolas'
        ];
        return view('series',compact('series'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request){

        $nome = $request->nome;
        var_dump($nome);

    }


}
