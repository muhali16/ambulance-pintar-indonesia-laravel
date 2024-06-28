<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'SEOData' => new SEOData(
                title: 'Articles',
                description: 'Halaman kumpulan artikel yang dipublikasi oleh PT Ambulance Pintar Indonesia.',
                type: 'article',
                locale: 'id',
            ),
        ];
        $data['articles'] = Article::latestArticles()->filter()->paginate(9)->withQueryString();
        if(isset(\request()->category)) {
            $data['category'] = Category::find(\request()->category);
        }

        return view("web.pages.articles.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $article->increment('views');
        return view("web.pages.articles.show", [
            'SEOData' => new SEOData(
                title: "$article->title",
                description: str($article->body)->limit(100)->substr(3),
                author: "Ambulance Pintar Indonesia",
                image: asset('storage/' . $article->thumbnail),
                published_time: $article->created_at,
                section: $article->category->name,
                tags: explode(',', $article->tags),
                type: 'article',
                locale: 'id',
            ),
            'article' => $article,
            'popularArticlesInMonth' => Article::popularArticlesInMonth()->get(),
            'latestArticles' => Article::latestArticles()->get(),
            'tags' => str($article->tags)->explode(','),
            'categories' => Category::latest()->limit(6)->get(),
            'bestAmbulanceProducts' => Product::bestAmbulanceProducts()->limit(3)->get(),
            'bestNonAmbulaceProducts' => Product::bestNonAmbulanceProducts()->limit(3)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
