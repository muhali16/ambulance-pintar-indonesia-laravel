<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchOffice extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'city_name',
        'contact_address',
        'maps_link',
    ];
}
