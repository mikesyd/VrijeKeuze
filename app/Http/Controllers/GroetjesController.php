<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroetjesController extends Controller
{


    public function groeten($name, $location)
    {
        $text = 'Groeten, ' . $name. ' uit ' . $location;

        return view ('welcome',[
            'text'=>$text
            ]);
    }


}
