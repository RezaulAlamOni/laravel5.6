@extends('layouts.admin');

@section('content')


    <h1 class="text-center text-primary ">All Posts</h1>

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
                <td>{{$post->id}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category_id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->photo_id}}</td>
                <td>{{$post->created_at->diffForhumans()}}</td>
                <td>{{$post->updated_at->diffForhumans()}}</td>
                <td><a href="" class="btn btn-primary">Edit</a></td>
                <td><a href="" class="btn btn-danger">Delete</a></td>

               @endforeach
           @endif
             </tbody>
    </table>




    @stop