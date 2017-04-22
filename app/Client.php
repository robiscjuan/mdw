<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = ['name', 'last_name', 'address', 'phone_number', 'email', 'nif'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public $timestamps = true;

    public function rooms()
    {
        return $this->belongsToMany('App\Room')->withPivot('start_hour')->withPivot('finish_hour')->withTimestamps();
    }
}
