<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateFromConsole extends Controller
{
    //
    public function show() {
        //$data = array('titrle'=>'Hello World');
        //return view('default.template', $data);

        //return view('default.template')->with('titel','Hello World 2');

        //$view = view('default.template');
        //$view->with('titel','Hello World 3');
        //$view->with('title2', 'Hello World 4');
        //return $view;

        //return view('default.template')->withTitel('Hello World 5');

        $myview = view('default.template');
        $myview->with('title', 'Hello world 4');
        $myview->with('title2', 'Hello world 5');
        return $myview;
    }

    public function test()
    {
        return view('welcome');
    }
}
