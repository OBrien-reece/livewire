<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = ['director_id', 'name'];

    public function director()
    {
        return $this->belongsTo(Director::class, 'director_id');
    }
}
