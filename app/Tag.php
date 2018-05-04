<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name', 'slug'
    ];


    /*****************************************
     * UN TAG PUEDE TENER MUCHOS POST
     * **************************************/

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
