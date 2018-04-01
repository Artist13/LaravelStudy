<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Core extends Controller
{
    protected static $articles;
    //

    public static function addArticles($array)
    {
        return self::$articles[] = $array;
    }
    public function getArticles()
    {
        //$articles = DB::table('articles')->get();
        //$articles = DB::table('articles')->value('name');//Данные только одного поля
        /*DB::table('articles')->orderBy('id')->chunk(2, function($arts){
            foreach($arts as $article){
                Core::addArticles($article);
            };
        });*/

        //dump(self::$articles);

        $articles = DB::table('articles')->pluck('name');
        dump($articles);
    }
}
