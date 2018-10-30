
@extends('layouts.admin')

@section('content')
    <h1 class="page-header">
        Create Posts

    </h1>
    <div class="col-sm-10">
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}
        {{csrf_field()}}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Enter Post Title']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cat_id','Category') !!}
            {!! Form::select('cat_id',array(''=>'Option'),0,['class'=>'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('photo_id','Photo') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body','Description') !!}
            {!! Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Enter Post Details','rows'=>4 ]) !!}
        </div>

        {!! Form::submit('Create Post',['class'=>'btn btn-success col-sm-6']) !!}
        <a href="" class="btn btn-primary col-sm-6"> Back</a>

        {!! Form::close() !!}
    </div>
@stop