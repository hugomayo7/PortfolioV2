<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'tags',
        'images',
        'title',
        'subtitle',
        'content',
        'slug',
        'created_at'
    ];

    protected $casts = [
        'tags' => 'array',
        'images' => 'array'
    ];
}
