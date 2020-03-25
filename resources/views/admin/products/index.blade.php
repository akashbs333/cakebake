@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">All Products</li>
                    </ol>
                </div>
                <h4 class="page-title">All Products</h4>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>


    <div class="row">
        @if($products)
            @foreach($products as $product)
        <div class="col-md-6 col-lg-6 col-xl-3">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title font-20 mt-0">{{$product->product_name}}</h4>
                    <h6 class="card-subtitle text-muted">{{$product->category->name}}</h6>
                </div>
                <img class="img-fluid" src="{{$product->photo ? $product->photo->file : asset('images/noimage.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">{{$product->product_description}}</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

        </div>
            @endforeach
            @endif
    </div>

@stop