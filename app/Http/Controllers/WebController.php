<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\BranchOffice;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\HeroSliderConfig;
use App\Models\Product;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WebController extends Controller
{
    public function index(): View
    {
        return view("web.pages.index", [
            'title' => 'Ambulance Pintar Indonesia',
            'branchOffices' => BranchOffice::all(),
            'popularArticles' => Article::popularArticlesInMonth()->get(),
            'latestArticles' => Article::latestArticles()->get(),
            'ambulances' => Product::bestAmbulanceProducts()->get(),
            'nonAmbulances' => Product::bestNonAmbulanceProducts()->get(),
            'heroSliders' => HeroSliderConfig::all(),
            'testimonies' => Testimony::all(),
            'galleryPhotos' => Gallery::latest()->limit(6)->get(),
        ]);
    }

    public function search(Request $request): View
    {
        return view('web.pages.search.index', [
            'title' => "Search: $request->search | Ambulance Pintar Indonesia",
            'articles' => Article::filter()->paginate(6),
            'products' => Product::filter()->paginate(6),
        ]);
    }

    public function about(): View
    {
        return view('web.pages.about', [
            'title' => 'Tentang Ambulance Pintar Indonesia',
            'popularArticlesInMonth' => Article::popularArticlesInMonth()->get(),
            'latestArticles' => Article::latestArticles()->get(),
            'categories' => Category::latest()->get(),
        ]);
    }
}
