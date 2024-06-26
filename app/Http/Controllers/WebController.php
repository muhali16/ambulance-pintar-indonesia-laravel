<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\BranchOffice;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\HeroSliderConfig;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Testimony;
use App\Models\WebView;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class WebController extends Controller
{
    public function index(): View
    {
        WebView::increment('views');
        return view("web.pages.index", [
            'SEOData' => new SEOData(
                description: "PT Ambulance Pintar Indonesia adalah perusahaan yang bergerak di bidang spesialis ambulance, ambulance care, modifikasi, 4x4 system, rental, equipment dan donation.",
                image: asset("assets/images/resources/logo.webp"),
                type: 'website',
                locale: 'id'
            ),
            'branchOffices' => BranchOffice::orderBy('city_name')->get(),
            'popularArticles' => Article::latestArticles()->get(),
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
            'SEOData' => new SEOData(
                title: "Seach: $request->search", description: "Hasil pencarian untuk $request->search di produk ambulance dan artikel.", locale: 'id'
            ),
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

    public function sitemap()
    {
        $productCategories = ProductCategory::all();
        $products = Product::all();
        $articles = Article::all();

        return response()
            ->view('web.sitemap', compact('productCategories', 'products', 'articles'))
            ->header('Content-Type', 'text/xml');
    }
}
