<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'portfolios';


    protected $fillable = [
        'tags',
        'images',
        'title',
        'subtitle',
        'content',
        'slug'
    ];

    protected $casts = [
        'tags' => 'array',
        'images' => 'array'
    ];
}
