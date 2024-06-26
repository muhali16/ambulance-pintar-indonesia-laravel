<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebView extends Model
{
    use HasFactory;

    protected $table = 'web_views_tables';

    public $timestamps = false;

    protected $fillable = [
        'page_name', 'views'
    ];
}
