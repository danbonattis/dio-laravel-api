<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller {


    public function hello($name, Request $request) {

        return response()->json([
            'oi' => "Hello World {$name}",
            'tchau' => $request->all()
        ]);

    }

}
