<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'
    ];

    /************************************
     * UN POST PERTENECE A UN USUARIO
     * **********************************/
    public function user(){
        return $this->belongsTo(User::class);
    }


    /************************************
     * UN POST PERTENECE A UNA CATEGORIA
     * **********************************/
    public function category(){
        return $this->belongsTo(Category::class);
    }


    /************************************
     * UN POST PUEDE TENER MUCHOS TAGS
     * **********************************/
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
