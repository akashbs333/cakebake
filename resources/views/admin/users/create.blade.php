@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Create Users</li>
                    </ol>
                </div>
                <h4 class="page-title">Create User</h4>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminUserController@store', 'files'=> true]) !!}

                    <div class="form-group row">
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::select('role_id', [''=>'Choose Role'] + $roles, null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), 0, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::file('photo_id', ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::submit('Create User', null, ['class'=>'form-control']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    @include('includes.form-error')

@endsection