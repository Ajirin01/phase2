@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Users</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-border table-striped custom-table datatable mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>role</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> {{$user->name}}</td>
                                <td>{{$user->id}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->status}}</td>
                                <td>{{$user->role}}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ url('admin/users/'.$user->id.'/edit') }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a> --}}
                                            <form id="delete-form" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a class="dropdown-item" href="#">
                                                <i class="fa fa-trash-o m-r-5  text text-danger" >
                                                   <input class="text text-danger" type="submit" value="Delete" style="
                                                   background:transparent;
                                                   border: none;
                                                   cursor: pointer;
                                                   font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                                   font-weight: 500;
                                                   font-size: .8rem
                                                   ">
                                               </i>
                                               </a>
                                           </form>
                                        </div>
                                    </div>
                                </td>
                            </tr> 
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection