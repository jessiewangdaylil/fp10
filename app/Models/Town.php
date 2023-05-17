<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;
    protected $dates = ["deleted_at"];
    public function City()
    {
        return $this->belongTo(City::class);
    }
    public function Roads()
    {
        return $this->hasMany(Road::class);
    }
}