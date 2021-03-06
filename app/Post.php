<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [''];


    protected $dates = ['published_at'];


    public function category(){

        return $this-> belongsTo(Categoria::class);
    }

    public function tags(){

        return $this-> belongsToMany(Tag::class);
    }
}
