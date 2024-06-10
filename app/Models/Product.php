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
        'is_use_product_specification' => 0,
    ];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
