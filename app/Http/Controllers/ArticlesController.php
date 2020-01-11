<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function showArticles()
    {
        $articles = Article::paginate(10);
        return view('articles.showArticles', compact('articles'));
    }
    public function singleArticle($id)
    {
        $article = Article::find($id);

        return view('articles.indexArticle', compact('article'));
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function createArticle()
    {
        return view('articles.create');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function store(Request $request)
    {

    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function editArticle($id)
    {

    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function deleteArticle($id)
    {

    }
}
