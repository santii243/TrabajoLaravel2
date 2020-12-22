<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applied extends Model
{
    protected $table = 'applieds';
    protected $fillable = ['user_id', 'offer', 'created_at', 'updated_at'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function offer(){
        return $this->belongsTo(offer::class,'offer_id');
    }
}
