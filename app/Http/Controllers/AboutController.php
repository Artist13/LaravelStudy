<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;



use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    //
    public function show(){

        //return response()->myRes("hello");

        //return RedirectResponse::create('/');

        //$view = view('about')->withTitle('About Us')->render();

        //return response($view);

        if(view()->exists('about')){

            //$result = DB::update("UPDATE articles SET name = 'TEST3' WHERE id = '6'");

            //$result = DB::delete("DELETE FROM articles WHERE id = 6");

            //$result = DB::connection()->getPdo()->lastInsertId(); 

            $articles = DB::select("SELECT * FROM articles");


            //dump($result);
            dump($articles);

            //DB::table('articles')->insert(['name'=>'test1','text'=>'text', 'img'=>'pic.jpg']);

            //return (new Response($view))->header('Content-Type','newType');

            return view('about')->withTitle('About Us');
        }
        abort(404);
    }
}
