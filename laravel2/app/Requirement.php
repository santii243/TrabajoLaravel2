<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $table = 'requirements';
    protected $fillable = [
        'description',
        'offer_id',
        'created_at',
        'updated_at'
    ];

    public function offer() {
        return $this->belongsTo(Offer::class,'offer_id');
    }
}
