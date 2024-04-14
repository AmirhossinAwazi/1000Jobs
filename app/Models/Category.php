<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    // public function job(): BelongsToMany
    // {
    //     return $this->belongsToMany(Job::class);
    // }

    public function job(): HasMany
    {
        return $this->hasMany(Job::class);
    }

    public function AtGlance(): HasOne
    {
        return $this->hasOne(AtGlance::class);
    }
}
