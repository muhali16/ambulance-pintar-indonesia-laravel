<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'specification',
        'tier',
    ];

    protected $attributes = [
        'tier' => 1,
    ];
}
