<?php namespace App\Http\Controllers;

use App\Article;
use App\ContentArea;
use App\CSS;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArticleRequest;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller {

    public function __construct(){
        $this->middleware('author', ['except' => ['index','show']]);
    }

    public function index()
    {
        $active_page = Page::find(1);
        $pages = Page::orderBy('created_at','asc')->get();
        $content = ContentArea::orderBy('order', 'desc')->get();
        $articles = Article::orderBy('created_at', 'desc')->get();
        $css = CSS::where('active', 'yes')->get();
        return view('site.index', compact('pages', 'active_page','content', 'articles', 'css'));
    }

    public function create()
    {
        $pages = Page::lists('name','name');
        $content = ContentArea::lists('name', 'name');

        return view('site.create', compact('pages', 'content'));
    }

    public function store(ArticleRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = Auth::user()->name;
        Article::create($input);

        return view('site.index');
    }

    public function show($id)
    {
        $page = Page::findOrFail($id);
        $pages = Page::orderBy('created_at','asc')->get();
        $content = ContentArea::orderBy('order', 'desc')->get();
        $articles = Article::orderBy('created_at', 'desc')->get();
        $css = CSS::where('active', 'yes')->get();
        return view('site.show', compact('page', 'pages','content','articles','css'));
    }

    public function edit($id){
        $pages = Page::lists('name','name');
        $content = ContentArea::lists('name', 'name');
        $article = Article::findOrFail($id);

        return view('site.edit', compact('article','pages', 'content'));
    }

    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);
        $input = $request->all();
        $input['modified_by'] = Auth::user()->name;
        $article->update($input);

        return redirect('site');
    }
}
