<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'city',
        'private',
        'description',
        'items',
        'image',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
            'private' => 'boolean',
            'items' => 'array',
        ];
    }
}
