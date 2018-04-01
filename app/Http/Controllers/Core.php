<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Article;
use App\User;
use App\country;
use App\Role;

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

        //$articles = DB::table('articles')->pluck('name');

        //dump($articles);
        //-------------------------------------------------
        //$articles = Article::where('id','>',3)->get();
        /*foreach($articles as $article){
            echo $article->name.'</br>';
        }*/

        /*$article = new Article;
        $article->name = 'New Article';
        $article->text = 'New Text';
        $article->img = '';
        $article->save();*/

        /*$article = Article::find(7);
        $article->name = 'Updated name';
        $article->text = 'Updated Text';
        $article->save();*/

        /*Article::create(
                        [
                            'name'=>'Sport artical',
                            'text'=>'Some text',
                            'img'=>''
                        ]
        );*/
        //Вернет первое вхождение удовлетворяющее полям иначе создаст новый
        /*$article = Article::firstOrCreate(
            [
                'name'=>'Sport artical',
                'text'=>'Some text',
                'img'=>''
            ]
        );*/
        //Вернет первое вхождение с указанными полчми, иначе вернет новыый объек модели объект без добавления в бд
        /*Article::firstOrNew(
            [
                'name'=>'Sport artical',
                'text'=>'Some text',
                'img'=>''
            ]
        );*/

        //$article = Article::find(8);
        //$article->delete();//Article::destroy(8) - идентично

        /*$article = Article::find(7);
        $article->delete();*/
        /*$articles = Article::withTrashed()->get();
        foreach($articles as $article)
        {
            if($article->trashed()){
                echo $article->name.' deleted</br>';
                //$article->restore() //Восстановит удаленный объект
            }
            else{
                echo $article->name.' undeleted</br>';
            }
        }*/

        //$article->forceDelete(); - Принудительное удаление записи


        //$articles = Article::all();

        //dump($articles);

        //$country = country::find(1);

        //dump($country->user);

        /*$user = User::find(1);

        $articles = $user->articles()->where('id','>','4')->get();
        dump($articles);*/

        /*$user = User::find(1);
        dump($user->roles);*/
        $role = Role::find(1);
        dump($role->users);

        

    }
}
