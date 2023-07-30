<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\articleRequest;

class articleController extends Controller
{
    
    function index(){
        $articles = Article::get();
        return view('article.index',compact('articles'));
    }
    function add(){
        return view('article.create');
    }
    function create(articleRequest $request)
    {
        $article = new Article();

        //1 methode

        $article->title = $request->title;
        $article->article = $request->article;
        $article->save();

        //2 methode

        // $article->created([
        //     'title' => $request->title,
        //     'article' => $request->article
        // ]);
        return redirect()->route('articleIndex')->with('error', 'article ajouter');
    }

    function edit($articles){
        $article = Article::find($articles);

        return view('article.edit', compact('article'));
    }
    function update($articles,articleRequest $request){
        $article = Article::find($articles);
        $article->title = $request->title;
        $article->article = $request->article;
        $article->update();
        return redirect()->route('articleIndex');
    }

    public function delete($articles){
        $article = Article::find($articles);
        $article->delete();
        return redirect()->route('articleIndex');
    }
}
