<?php namespace App\Http\Controllers;

use App\CSS;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\cssTemplateRequest;
use Illuminate\Support\Facades\Auth;
Use Request;

class cssTemplatesController extends Controller {

    public function __construct(){
        $this->middleware('editor');
    }

    public function index()
    {
        $csstemplates = CSS::orderBy('created_at','desc')->get();

        return view('cssTemplate.index', compact('csstemplates'));
    }

    public function create()
    {
        return view('cssTemplate.create');
    }

    public function show($id)
    {
        $csstemplate = CSS::findOrFail($id);

        return view('cssTemplate.show', compact('csstemplate'));
    }

    public function store(cssTemplateRequest $request)
    {
        $input = $request->all();

        if($input['active'] = 'yes')
        {
            CSS::where('active', '=', 'yes')->update(['active' => 'no']);
        }


        $input['created_by'] = Auth::user()->name;

        CSS::create($input);

        return redirect('csstemplates');
    }

    public function edit($id){

        $csstemplate = CSS::findOrFail($id);
        return view('cssTemplate.edit', compact('csstemplate'));
    }

    public function update($id, cssTemplateRequest $request){
        $csstemplate = CSS::findOrFail($id);

        $input = $request->all();

        if($input['active'] = 'yes')
        {
            CSS::where('active', '=', 'yes')->update(['active' => 'no']);
        }

        $input['modified_by'] = Auth::user()->name;

        $csstemplate->update($input);

        return redirect('csstemplates');
    }

    public function destroy($id){
        $csstemplate = CSS::findOrFail($id);

        $csstemplate->delete();

        return redirect('csstemplates');

    }

}
