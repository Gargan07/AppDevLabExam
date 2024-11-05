<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    //
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'author',
        'published_year',
        'genre',
        'description',
    ];
}
