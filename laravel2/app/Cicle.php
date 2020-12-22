<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cicle extends Model
{
    protected $table = 'articles';
    protected $fillable = ['name', 'img', 'created_at', 'updated_at'];

    public function users(){
        return $this->hasMany(user::class);
    }
    public function offers(){
        return $this->hasMany(offer::class);
    }
    public function articles(){
        return $this->hasMany(article::class);
    }
}
