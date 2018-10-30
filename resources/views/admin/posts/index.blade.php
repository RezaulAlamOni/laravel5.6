@extends('layouts.admin');

@section('content')


    <h1 class="page-header">All Posts <br>
        <a href="{{Route('admin.posts.create')}}" class="btn btn-info">Add Posts</a>

    </h1>

    <table class="table table-bordered " cellspacing="1" cellpadding="1">
       <thead>
         <tr>
           <th>ID</th>
           <th>Owner</th>
           <th>Category</th>
           <th>Title</th>
           <th>Body</th>
           <th>Photo</th>
           <th>Created At</th>
           <th>Updated At</th>
           <th>Edit</th>
           <th>Delete</th>
         </tr>
       </thead>
       <tbody>
       @if($posts)
           @foreach($posts as $post)
               <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>
                        <img height="70px" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400*400' }}" alt="">
                    </td>
                    <td>{{$post->created_at->diffForhumans()}}</td>
                    <td>{{$post->updated_at->diffForhumans()}}</td>
                    <td><a href="{{Route('admin.posts.edit',$post->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        {!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]]) !!}
                        {{csrf_field()}}
                        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
               </tr>
               @endforeach
           @endif
             </tbody>
    </table>




    @stop