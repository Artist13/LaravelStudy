<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Формирует запрос вручную
        //Не сработало. Неудобный способ
        //DB::insert('INSERT INTO "articles" ("name", "text", "img") VALUES (?,?,?)',
        //                                    [
        //                                    'Blog post', 
        //                                    '<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>',
        //                                    'pic1.jpg'
        //                                    ]);

        //Формирует запрос автоматически
        DB::table('articles')->insert(
                                      [
                                          [
                                            'name'=>'Simple blog post',
                                            'text'=>'<p>В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.</p>',
                                            'img'=>'pic2.jpg'
                                          ],
                                          [
                                            'name'=>'Simple blog post 2',
                                            'text'=>'<p>Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>',
                                            'img'=>'pic3.jpg'
                                          ]
                                          //... другие строки
                                      ]
                                     );
        //С использованием модели
        Article::create([
                        'name'=>'Sample post blog 3',
                        'text'=>'Hello world',
                        'img'=>'pic4.jpg'              
                        ]);
    }
}
