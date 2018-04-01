<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /*protected $request
    public function __construct(Request $request){
        $this->request = $request;
    }*/

    //Отображает шаблон Contact и предает ему заголовок
    public function show(Request $request){
        //$request->flash();
        return view('default.form',['title'=>$request->path(), 'script'=>'<script>alert("Hello")</script>']);
    }
    
    public function post(Request $request)
    {
        return view('default.contact', ['title'=>"   ",'form'=>$request->all()]);
    }
}

?>
