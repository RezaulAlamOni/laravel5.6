<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Admin;
use App\Http\Requests\EditRequest;
use App\Http\Requests\UsersRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{

    public function __construct()
    {
        $this->middleware(Admin::class);
    }

    public function dashboard(){

        return view('admin\index');
    }
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }
    public function create()
    {
        $roles = Role::pluck('name','id')->all();
        return view('admin.users.create',compact('roles'));
    }

    public function store(UsersRequest $request)
    {
        $input = $request->all();
        if($file= $request->file('photo_id')){

            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $input['password']=bcrypt($request->password);

        User::create($input);
        Session::flash('created','User has been created !!!!');
        return redirect('/admin/users');
    }
    public function show($id)
    {
        return view('admin.users.ss');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name','id')->all();
        return view('admin.users.edit',compact('user','roles'));
    }

    public function update(EditRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();

        if($file= $request->file('photo_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id']=$photo->id;
        }

        $input['password']=bcrypt($request->password);
        $user->update($input);
        Session::flash('updated','User has been Updated !!!!');
        return redirect('/admin/users');
    }

    public function destroy($id)
    {

        $user = User::findOrFail($id);
        unlink(public_path().$user->photo['file']);
        $user->delete();

        Session::flash('deleted','User has been Deleted !!!!');
        return redirect('/admin/users');
    }

}
