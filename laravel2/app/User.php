<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table="users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'cicle_id', 'actived', 'email', 'email_verified_at', 'password', 'type', 'num_offer_applied', 'remember_token', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function belongs(){
        return $this->hasMany(belong::class);
    }

    public function cicle(){
        return $this->belongsTo(cicle::class,'cicle_id');
    }
}
