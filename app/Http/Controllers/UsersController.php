<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\UserRequest;
use App\Permission;
use App\User;
use Request;

class UsersController extends Controller {

    public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {

        $users = User::orderBy('created_at','desc')->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $permissions = Permission::lists('permission_type','id');
        return view('users.create', compact('permissions'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }

    public function store(UserRequest $request)
    {
        User::create(Request::all());

        $user = User::orderBy('id','desc')->first();

        $user->permissions()->attach($request->input('permission_list'));

        return redirect('users');
    }

    public function edit($id){

        $user = User::findOrFail($id);
        $permissions = Permission::lists('permission_type','id');
        return view('users.edit', compact('user', 'permissions'));
    }

    public function update($id, UserRequest $request){
        $user = User::findOrFail($id);

        $user->update($request->all());

        $user->permissions()->sync($request->input('permission_list'));
        return redirect('users');
    }

    public function destroy($id){
        $user = User::findOrFail($id);

        $user->delete();

        return redirect('users');

    }
}
