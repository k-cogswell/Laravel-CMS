<?php namespace App\Http\Controllers;

use App\Article;
use App\ContentArea;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Support\Facades\Auth;
use Request;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller {

    public function __construct(){
        $this->middleware('editor');
    }

    public function index()
    {
        $articles = Article::orderBy('created_at','desc')->get();

        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        $pages = Page::lists('name','name');
        $content = ContentArea::lists('name', 'name');

        return view('articles.create', compact('pages', 'content'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function store(ArticleRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = Auth::user()->name;
        Article::create($input);

        return redirect('articles');
    }

    public function edit($id){
        $pages = Page::lists('name','name');
        $content = ContentArea::lists('name', 'name');
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article','pages', 'content'));
    }

    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);
        $input = $request->all();
        $input['modified_by'] = Auth::user()->name;
        $article->update($input);

        return redirect('articles');
    }

    public function destroy($id, ArticleRequest $request){
        $article = Article::findOrFail($id);

        $input = $request->all();
        $input['page'] = 'Archive';

        $article->update($input);

        return redirect('articles');

    }
}
