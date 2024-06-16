<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSpecification;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(ProductCategory $productCategory): View
    {
        return view('web.pages.products.index', [
            'title' => "$productCategory->name | Ambulance Pintar Indonesia",
            'productCategory' => $productCategory,
            'products' => $productCategory->products()->activeProducts()->get(),
            'bestProducts' => Product::bestProducts()->get(),
        ]);
    }

    public function show(ProductCategory $productCategory, Product $product): View
    {
        $product->increment('views');
        return view('web.pages.products.show', [
            'title' => "$product->name | Ambulance Pintar Indonesia",
            'productDetail' => $product,
            'productCategories' => ProductSpecification::when($product->product_specification_id ?? false, function ($query) use ($product) {
                return $query->whereIn('id', $product->product_specification_id);
            })->get(),
            'bestProducts' => Product::bestProducts()->get(),
        ]);
    }
}
