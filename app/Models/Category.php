<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    // public function job():HasMany{
    //     return $this->hasMany(job::class);
    // }

    public function job():BelongsToMany{
        return $this->belongsToMany(job::class);
    }
}
