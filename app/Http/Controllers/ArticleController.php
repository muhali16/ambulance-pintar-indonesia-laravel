<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latestArticles()->filter()->paginate(9)->withQueryString();
//        if (isset(request()->category)) {
//            $articles = Article::latestArticles()->whereHas('category', function ($query) {
//                $query->where('id', request()->category);
//            })->paginate(9);
//        }
        return view("web.pages.articles.index", [
            'title' => 'Articles | Ambulance Pintar Indonesia',
            'articles' => $articles,
        ]);
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
            'title' => "$article->title | Ambulance Pintar Indonesia",
            'article' => $article,
            'popularArticlesInMonth' => Article::popularArticlesInMonth()->get(),
            'latestArticles' => Article::latestArticles()->get(),
            'tags' => str($article->tags)->explode(','),
            'categories' => Category::latest()->limit(6)->get(),
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
