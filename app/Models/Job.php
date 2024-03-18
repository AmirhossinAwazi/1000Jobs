<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'experience_years',
        'job_datisfaction',
        'min_income_range',
        'max_income_range',
        'revenue_model',
        'company',
        'description',
        'moderated_at'
    ];

    public function Category():BelongsTo{
        return $this->BelongsTo(Category::class);
    }

}
