<?php

namespace App\Models;

use App\Models\Town;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $dates = ["deleted_at"];
    public function Towns()
    {
        return $this->hasMany(Town::class);
    }
}