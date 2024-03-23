<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Job extends Model implements HasMedia
{
    use InteractsWithMedia;
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

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function photo(){
        return $this->morphOne(Media::class,'model')->where('collection_name','images');
    }

}
