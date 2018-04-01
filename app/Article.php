<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    //
    //$protected $table = "articles";
    protected $fillable = ['name','text', 'img'];
    protected $guarde = ['*'];
    protected $primaryKey = 'id';
    public $incrementing = TRUE;
    public $timestemps = TRUE;
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
