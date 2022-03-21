<?php

namespace App\Http\Controllers;

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

}
