<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Road extends Model
{
    use HasFactory;
    protected $dates = ["deleted_at"];
    public function Town()
    {
        return $this->belongsTo(Town::class);
    }
}