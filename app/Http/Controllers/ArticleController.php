<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // R - Retrive, Read 
    public function index()
    {
        $articles = Article::all();  // select * from articles
        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }

    // C - create
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // $article = new Article;
        // $article->title = $request->title;
        // $article->content = $request->content;
        // $article->save();

        return redirect('articles');
    }

    public function edit($id){
        $article = Article::find($id);  // select * from articles where id = $id
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $article = Article::find($id);
        $article->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect('articles');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return back();
    }
}
