<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSpecification;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class ProductController extends Controller
{
    public function index(ProductCategory $productCategory): View
    {
        return view('web.pages.products.index', [
            'SEOData' => new SEOData(
                title: $productCategory->name,
                description: 'Halaman kumpulan produk dari PT Ambulance Pintar Indonesia dengan kategori ' . $productCategory->name,
                image: asset('assets/image/resources/logo.webp'),
                type: 'website',
                locale: 'id',
            ),
            'productCategory' => $productCategory,
            'products' => $productCategory->products()->activeProducts()->get(),
            'bestProducts' => Product::bestProducts()->get(),
        ]);
    }

    public function show(ProductCategory $productCategory, Product $product): View
    {
        $product->increment('views');
        return view('web.pages.products.show', [
            'SEOData' => new SEOData(
                title: $product->name,
                description: $product->caption,
                image: asset('storage/' . $product->photo),
                section: 'Produk Ambulance',
                tags: ['ambulance', 'buat ambulance', 'ambulance terbaru', 'karoseri ambulance', 'ambulance pintar indonesia', $product->name],
                type: 'article',
                locale: 'id',
            ),
            'productDetail' => $product,
            'productCategories' => ProductSpecification::when($product->product_specification_id ?? false, function ($query) use ($product) {
                return $query->whereIn('id', $product->product_specification_id);
            })->orderBy('tier')->get(),
            'bestAmbulanceProducts' => Product::bestAmbulanceProducts()->limit(3)->get(),
            'bestNonAmbulaceProducts' => Product::bestNonAmbulanceProducts()->limit(3)->get(),
        ]);
    }
}
