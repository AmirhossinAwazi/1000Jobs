<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtGlance extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'description',
        'evidence',
        'skill',
        'investment',
    ];
}
