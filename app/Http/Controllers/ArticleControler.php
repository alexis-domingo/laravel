<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Article;

class ArticleControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //$articles = Article::all();

        //*You can get rid of 'all()' and you have to add '->get()'
        //$articles = Article::where('title', 'New Title')->get();
        //$articles = Article::all()->where('view', '>', 2000)->first();
        $articles = Article::orderBy('created_at', 'desc')->take(5)->get();

        return view('articles', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article = new Article();
        $article->title = 'New Title';
        $article->description = 'Description Example';
        $article->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->title = 'New Title';
        $article->description = 'Description Example';
        $article->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('article', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $article->title = 'NEW TITLE VALUE';//$request->title
        $article->save();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return 'it works';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        //OR
        Article::destroy([1, 3, 5]);
    }
}
