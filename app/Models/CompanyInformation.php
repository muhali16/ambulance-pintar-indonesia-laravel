<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'company_information';

    protected $fillable = [
        'name',
        'body',
        'link',
        'description'
    ];

    protected $attributes = [
        'link' => '#',
    ];
}
