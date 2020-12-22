<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title', 'description', 'image', 'cicle_id', 'created_at', 'updated_at'];

    public function cicle(){
        return $this->belongsTo(cicle::class,'cicle_id');
    }
}
