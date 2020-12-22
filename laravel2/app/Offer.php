<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';
    protected $fillable = ['headline', 'description', 'cicle_id', 'date_max', 'num_candidates','created_at', 'updated_at'];

    public function cicle(){
        return $this->belongsTo(cicle::class,'cicle_id');
    }
}
