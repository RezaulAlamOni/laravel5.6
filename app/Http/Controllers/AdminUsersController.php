<?php

namespace App\Http\Controllers;

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
        return view('admin.users.create');

    }


    public function store(Request $request)
    {
        return $request->all();

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
