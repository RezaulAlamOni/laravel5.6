<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUsersController extends Controller
{

    public function index()
    {
        return view('admin.users.index');

    }

    public function create()
    {
        return view('admin.users.create');

    }


    public function store(Request $request)
    {
        return view('admin.users.');

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
