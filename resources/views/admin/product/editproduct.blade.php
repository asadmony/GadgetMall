@extends('layouts.adminlayout')
@section('content')
<h1 class="mt-4">Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"> <a href="{{ route('admin.products') }}"> Products</a></li>
                            <li class="breadcrumb-item active">Update Product</li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>Update Product</h2>
            <hr>
            <x-alert />
        </div>
        <div class="" style="">
            <div class="col-xs-10">
                <form class="fluid" role="form" action="{{ route('admin.updateproduct',['product'=>$product->id]) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group pb-4">
                        <label for="productname">Product Name</label>
                        <input class="form-control " type="text" id="productname" name="productname" value="{{ $product->productname }}" >
                    </div>
                    <div class="form-group pb-4">
                        <label class="" for="description">Product Details</label>
                        <textarea class="form-control" name="description" id="description" cols="20" rows="10">{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group pb-4">
                        <label for="category">Category</label>
                        <select class="form-control" name="category" id="category">
                            <option value="{{ $product->category }}" selected>{{ $product->category }}</option>
                            @foreach ($cats as $cat)
                                <option value="{{ $cat->catname }}">{{ $cat->catname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group pb-4">
                        <label for="brand">Brand</label>
                        <select class="form-control" name="brand" id="brand">
                            <option value="{{ $product->brand }}" selected>{{ $product->brand }}</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->brandname }}">{{ $brand->brandname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group pb-4">
                        <label for="price">Price</label>
                        <div class="input-group">
                            <span class="input-group-addon px-3 pt-1 border">&#2547</span>
                            <input class="form-control" type="number" id="price" name="price" value="{{ $product->price }}" >
                            <span class="input-group-addon px-2 pt-2 border" >.00</span>
                        </div>
                    </div>
                    <div class="form-group pb-4">
                        <label for="quantity">Quantity</label>
                        <input class="form-control " type="number" id="quantity" name="quantity" value="{{ $product->quantity }}" >
                    </div>
                    <button class="form-control btn btn-primary" type="submit">save</button>
                </form>
            </div>
        </div>
</div>
@endsection
