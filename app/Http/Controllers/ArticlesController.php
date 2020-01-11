<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    public function showArticles()
    {
        $articles = Article::orderBy('updated_at', 'DESC')->paginate(10);
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
     * Store article
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        
        try{
            $validateArticle = $request->validate([
                'title'         => 'require|unique:title|max:50|min:2',
                'description'   => 'require|unique:description|max:250|min:40'
            ]);
            \DB::beginTransaction();
                $article = Article::create($request->all());
            \DB::commit();
        } catch(\Exception $e) {
            \DB::rollBack();
            return back()->withInput();

        }
        return redirect()->route('articles');
    }

    /**
     * Edit article by $id
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
