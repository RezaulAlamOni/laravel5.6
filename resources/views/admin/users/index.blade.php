@extends('layouts.admin')

@section('content')
    <h1 class="page-header">
        All Users
    </h1>
    <a href="{{Route('admin.user.create')}}" class="btn btn-info">Add User</a>
    <table class="table table-bordered">
       <thead>
         <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Email</th>
           <th>Photo</th>
           <th>Role</th>
           <th>Active</th>
           <th>Created</th>
           <th>Updated</th>
           <th class="text-center">Edit</th>
           <th class="text-center">Delete</th>
         </tr>
       </thead>

       <tbody>

       @if($users)
           @foreach($users as $user)
         <tr class="">
           <td>{{$user->id}}</td>
           <td>{{$user->name}}</td>
           <td>{{$user->email}}</td>
           <td><a href=""><img class="img-responsive" style="height: 40px;" src="/images/{{$user->photo['file']}}" alt=""></a></td>
           <td>{{$user->role['name']}}</td>
           <td>{{$user->is_active==1?'Active':'Not Active'}}</td>
           <td>{{$user->created_at->diffForHumans()}}</td>
           <td>{{$user->updated_at->diffForHumans()}}</td>
           <td class="text-center"><a class="btn btn-primary" href="">Edit</a></td>
           <td class="text-center"><a class="btn btn-danger" href="">Delete</a></td>
         </tr>
         @endforeach
        @endif

      </tbody>
    </table>



@endsection