@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
                <h4 class="page-title">Datatable</h4>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    @if(Session::has('deleted_user'))
    <div class="row" style="justify-content:center;">
        <div class="alert alert-danger" role="alert"><strong>{{session('deleted_user')}}</strong></div>
    </div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Updated Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($users)
                            @foreach($users as $user)
                            <tr>
                                <td scope="row">{{$user->id}}</td>
                                <td><img height="50" src="{{$user->photo ? $user->photo->file : asset('images/noimage.jpg')}}" alt=""></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role ? $user->role->name : 'User Has No Role'}}</td>
                                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                                <td>{{$user->updated_at->diffForHumans()}}</td>
                                <td><div class="btn-group btn-group-sm" style="float: none;"><a href="{{route('admin.user.edit', $user->id)}}"><button type="button" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></button></a>{!! Form::open(['method'=>'DELETE', 'action'=>['AdminUserController@destroy', $user->id]]) !!} <button type="submit" class="tabledit-delete-button btn btn-sm btn-danger" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>{!! Form::close() !!}</div></td>
                            </tr>
                            @endforeach
                         @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

