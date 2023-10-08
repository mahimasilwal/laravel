<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    use HasFactory;
    protected $table = 'movies';
    protected $fillable = [
        'movie_name',
        'release_date',
        'description',
        'image_url',
        'video_url',
    ];
}