<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AtGlance extends Model
{
    use HasFactory;
    
    protected $table = 'atglances';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'description',
        'evidence',
        'skill',
        'investment',
    ];

    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'skill' => 'array',
    ];

    // You can define any additional relationships or methods here as needed
}
