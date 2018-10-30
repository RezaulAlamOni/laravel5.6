<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Admin;
use App\Http\Requests\PostCreateRequest;
use App\Photo;
use App\Post;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPostsController extends Controller
{

    public function __construct()
    {
        $this->middleware(Admin::class);
    }

    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    public function create()
    {
        $roles = Role::pluck('name','id')->all();
        return view('admin.posts.create',compact('roles'));
    }

    public function store(PostCreateRequest $request)
    {
        $input = $request->all();
        $user = Auth::User();


        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $user->posts()->create($input);

        return redirect('/admin/posts');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.posts.edit');
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
