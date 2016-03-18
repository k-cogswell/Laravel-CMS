<?php namespace App\Http\Controllers;

use App\Article;
use App\ContentArea;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContentAreaRequest;
use Illuminate\Support\Facades\Auth;
use Request;

class ContentAreasController extends Controller {

    public function __construct(){
        $this->middleware('editor');
    }

    public function index()
    {
        $contentareas = ContentArea::orderBy('created_at','desc')->get();

        return view('content.index', compact('contentareas'));
    }

    public function create()
    {
        return view('content.create');
    }

    public function show($id)
    {
        $contentarea = ContentArea::findOrFail($id);
        $articles = Article::where('content_area', '=', $contentarea->name)->get();
        return view('content.show', compact('contentarea', 'articles'));
    }

    public function store(ContentAreaRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = Auth::user()->name;
        ContentArea::create($input);

        return redirect('contentareas');
    }

    public function edit($id){

        $contentarea = ContentArea::findOrFail($id);
        return view('content.edit', compact('contentarea'));
    }

    public function update($id, ContentAreaRequest $request){
        $contentarea = ContentArea::findOrFail($id);
        $input = $request->all();
        $input['modified_by'] = Auth::user()->name;
        $contentarea->update($input);

        return redirect('contentareas');
    }

    public function destroy($id){
        $contentarea = ContentArea::findOrFail($id);

        $contentarea->delete();

        return redirect('contentareas');

    }

}
