<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'title',
        'tags',
        'body',
        'slug',
        'thumbnail',
        'views',
        'category_id',
        'user_id',
        'is_publish',
    ];

    protected $casts = [
        'is_publish' => 'boolean',
        'tags' => 'array',
    ];

    protected $attributes = [
//        'user_id' => '9c3add73-eae9-496b-a577-52ac5555217b',
        'views' => 0,
    ];

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($article){
            Storage::disk('public')->delete('storage/'.$article->thumbnail);
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query)
    {
        $query->when(request()->search ?? false, function ($query) {
                    return $query->where('title', 'like', '%' . request()->search . "%")
                        ->orWhere('body', 'like', '%' . request()->search . "%");
                })
            ->when(request()->category ?? false, function ($query) {
                return $query->where('category_id', request()->category);
            })->where('is_publish', 1);
    }

    public function scopePopularArticlesInMonth($query)
    {
        $query->where('is_publish', 1)
            ->whereBetween('created_at', [now()->subMonth(1), now()->subDay(1)])
            ->orderBy('views', 'desc')
            ->limit(3);
    }

    public function scopeLatestArticles($query)
    {
        $query->where('is_publish', 1)
            ->latest()
            ->limit(3);
    }

}
