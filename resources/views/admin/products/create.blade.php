@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Create Product</li>
                    </ol>
                </div>
                <h4 class="page-title">Create Product</h4>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminProductsController@store', 'files'=> true]) !!}

                    <div class="form-group row">
                        {!! Form::text('product_name', null, ['class'=>'form-control', 'placeholder'=>'Product Name']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::select('category_id', [''=>'Choose Category'] + $categories, null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::file('photo_id', ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::textarea('product_description', null, ['class'=>'form-control', 'rows'=>3, 'placeholder'=>'Product Description']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::number('product_price', null, ['class'=>'form-control', 'placeholder'=>'Product Price - Full Quantity']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::number('product_slice_price', null, ['class'=>'form-control', 'placeholder'=>'Product Price - Slice']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::number('product_tax', null, ['class'=>'form-control', 'placeholder'=>'Product CGST']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::select('product_type', array(1=>'Full', 2=>'Slice', 3=>'Both'), 0, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group row">
                        {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), 0, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group row" style="justify-content: center">
                        {!! Form::button('Create Product', ['type'=>'submit', 'class'=>'form-control btn btn-success waves-effect btn-block']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    @include('includes.form-error')

@stop