<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['name_business','type'];
    public $timestamps = false;

    public function user()
    {
        return $this->morphOne('App\Models\User', 'userable');
    }
}