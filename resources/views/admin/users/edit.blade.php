@extends('layouts.admin')

@section('content')
    <h1 class="page-header">
        Update Users
    </h1>
    <div class="row">

        <div class="col-sm-3">
            <img class="img-responsive img-rounded" src="{{$user->photo ? $user->photo['file']: 'http://placeholder.it/400*400'}}" alt="">
        </div>
        <div class="col-sm-7">

        {!! Form::model($user ,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id] ,'files'=>true]) !!}
        {{csrf_field()}}

        <div class="form-group">
            {!! Form::label('name','Name') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Post Name']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter Post Email']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id','Role') !!}
            {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('status','Status') !!}
            {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id','Photo') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('Update User',['class'=>'btn btn-success']) !!}
        <a href="" class="btn btn-primary"> Back</a>

        {!! Form::close() !!}



        </div>

    </div>
    <div class="row">
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@stop