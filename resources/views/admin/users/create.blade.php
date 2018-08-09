@extends('layouts.admin')

@section('content')
    <h1 class="page-header">
        Create Users
    </h1>
        {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store']) !!}
            {{csrf_field()}}
            <div class="form-group">
                {!! Form::label('name','Name') !!}
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Post Name']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email','Email') !!}
                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Enter Post Email']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id','Role Id') !!}
                {!! Form::text('role_id',null,['class'=>'form-control','placeholder'=>'Role ID']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status','Status') !!}
                {!! Form::text('status',null,['class'=>'form-control','placeholder'=>'Status']) !!}
            </div>
    
            {!! Form::submit('Create Post',['class'=>'btn btn-success']) !!}
            <a href="" class="btn btn-primary"> Back</a>

        {!! Form::close() !!}




    @stop