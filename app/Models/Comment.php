<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'body',
        'moderated_at',
    ];

    protected $casts = [
        'moderated_at' => 'datetime',
    ];

    public static function booted()
    {
        static::addGlobalScope('moderated', fn ($q) => $q->whereNotNull('moderated_at'));
        static::addGlobalScope('latest', fn ($q) => $q->latest());
    }

    public function job(): BelongsTo{
        return $this->belongsTo(Job::class);
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

}
