<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = ['name', 'tv', 'internet', 'air_conditioner', 'jacuzzi', 'minibar'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public $timestamps = true;

    public function clients()
    {
        return $this->belongsToMany('App\Client')->withPivot('start_hour')->withPivot('finish_hour')->withTimestamps();
    }
}
