<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function show()
    {
        $array = array(
            'title'=>'Laravel Project',
            'data'=>[
                'one'=>'List 1',
                'two'=>'List 2',
                'three'=>'List 3',
                'four'=>'List 4',
                'five'=>'List 5'
            ],
            'data1'=>['List1','List2','List3'],
            'bvar'=>true,
            'script'=>"<script>alert('hello')</script>"
        );
        if(view()->exists('index')){
            return view('index', $array);
        }
        abort(404);
    }
}
