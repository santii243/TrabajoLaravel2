<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cicle extends Model
{
    protected $table = 'cicles';
    protected $fillable = [
        'name',
        'img',
        'created_at',
        'updated_at'
    ];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function offers() {
        return $this->hasMany(Offer::class);
    }
    
    public function articles() {
        return $this->hasMany(Article::class);
    }

}
