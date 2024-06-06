<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WebController extends Controller
{
    public function index(): View
    {
        return view("web.pages.index", [
            'title' => 'Ambulance Pintar Indonesia',
        ]);
    }
}
