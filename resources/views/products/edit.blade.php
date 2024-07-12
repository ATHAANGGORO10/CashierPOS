@extends('layouts.app')

@section('title', 'Edit Product')

@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <input type="text" name="title" class="form-control" placeholder="Title"  value="{{ $product->title }}">
            </div>
            <div class="col mb-3">
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <input type="text" name="product_code" class="form-control" placeholder="Products Code" value="{{ $product->product_code }}">
            </div>
            <div class="col mb-3">
                <textarea name="description" class="form-control" placeholder="Description">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection