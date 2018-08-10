<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{

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

        $input=$request->all();

        if($file= $request->file('photo_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id']=$photo->id;
        }
        $input['password']=bcrypt($request->password);

        User::create($input);

        return redirect('/admin/users');

    }

    public function show($id)
    {
        return view('admin.users.ss');

    }


    public function edit($id)
    {
        return view('admin.users.edit');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
