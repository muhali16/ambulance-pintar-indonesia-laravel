@php
echo '<?xml version="1.0" encoding="UTF-8" ?>';
@endphp

<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{route('web.index')}}</loc>
        <lastmod>{{carbon(date('Y-m-d H:i:s'))->toIso8601String()}}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>{{route('web.search')}}</loc>
        <lastmod>{{carbon(date('Y-m-d H:i:s'))->toIso8601String()}}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{route('web.about')}}</loc>
        <lastmod>{{carbon(date('Y-m-d H:i:s'))->subMonth(1)->toIso8601String()}}</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>{{route('gallery.index')}}</loc>
        <lastmod>{{carbon(date('Y-m-d H:i:s'))->toIso8601String()}}</lastmod>
        <priority>0.80</priority>
    </url>
    @foreach($productCategories as $category)
        <url>
            <loc>{{route('products.index', ['productCategory' => $category->id])}}</loc>
            <lastmod>{{carbon($category->updated_at)->toIso8601String()}}</lastmod>
            <priority>1.00</priority>
        </url>
    @endforeach
    @foreach($products as $product)
        <url>
            <loc>{{route('products.index', ['productCategory' => $product->product_category_id, 'product' => $product->id])}}</loc>
            <lastmod>{{carbon($product->updated_at)->toIso8601String()}}</lastmod>
            <priority>1.00</priority>
        </url>
    @endforeach
    @foreach($articles as $article)
        <url>
            <loc>{{route('articles.show', ['article' => $article->slug])}}</loc>
            <lastmod>{{carbon($article->updated_at)->toIso8601String()}}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1.00</priority>
        </url>
    @endforeach

</urlset>
