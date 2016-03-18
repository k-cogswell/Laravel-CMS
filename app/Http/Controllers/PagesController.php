<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\PageRequest;
use App\Page;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Request;

class PagesController extends Controller {

    public function __construct(){
        $this->middleware('editor');
    }

    public function index()
    {
        $pages = Page::orderBy('created_at','desc')->get();
        return view('pages.index', compact('pages', 'articles'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function show($id)
    {
        $page = Page::findOrFail($id);
        $articles = Article::where('page', '=', $page->name)->get();

        return view('pages.show', compact('page', 'articles'));
    }

    public function store(PageRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = Auth::user()->name;
        Page::create($input);

        return redirect('pages');
    }

    public function edit($id){

        $page = Page::findOrFail($id);
        return view('pages.edit', compact('page'));
    }

    public function update($id, PageRequest $request){
        $page = Page::findOrFail($id);
        $input = $request->all();
        $input['created_by'] = Auth::user()->name;
        $page->update($input);

        return redirect('pages');
    }

    public function destroy($id){
        $page = Page::findOrFail($id);

        $page->delete();

        return redirect('pages');

    }

}
