<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //

    protected $fillable = [
        'id',
        'name',
        'description',
        'user_id'

    ];

    public function user(){
		return $this->belongsTo('App\User');
    }

    public function matkuls(){
        return $this->hasMany('App\Matkul');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
