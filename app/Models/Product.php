<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'brosure',
        'photo',
        'caption',
        'views',
        'is_publish',
        'is_use_product_specification',
        'specification',
        'product_category_id',
        'product_specification_id',
    ];

    protected $casts = [
        'product_specification_id' => 'array',
    ];

    protected $attributes = [
        'is_publish' => 0,
        'views' => 0,
        'is_use_product_specification' => 0,
    ];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function scopeActiveProducts($query)
    {
        return $query->where('is_publish', 1)->latest();
    }

    public function scopeBestProducts($query)
    {
        return $query->where('is_publish', 1)->orderBy('views', 'desc')->limit(3);
    }

    public function scopeBestAmbulanceProducts($query)
    {
        return $query->where('is_publish', 1)->whereHas('productCategory', function ($query){
            return $query->where('name', 'Ambulance');
        })->orderBy('views', 'desc')->limit(6);
    }

    public function scopeBestNonAmbulanceProducts($query)
    {
        return $query->where('is_publish', 1)->whereHas('productCategory', function ($query){
            return $query->whereNot('name', 'Ambulance');
        })->orderBy('views', 'desc')->limit(6);
    }

    public function scopeFilter($query)
    {
        $query->when(request()->search ?? false, function ($query) {
            return $query->where('name', 'like', '%' . request()->search . "%")
                ->orWhere('caption', 'like', '%' . request()->search . "%");
        })
            ->when(request()->category ?? false, function ($query) {
                return $query->where('product_category_id', request()->category);
            })->where('is_publish', 1);
    }
}
