<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'slug', 'body'
    ];


    /*****************************************
     * UNA CATEGORIA PUEDE TENER MUCHOS POST
     * **************************************/

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
