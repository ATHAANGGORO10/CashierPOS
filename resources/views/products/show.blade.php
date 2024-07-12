@extends('layouts.app')

@section('title', 'Show Products')

@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}"
                readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Product Code</label>
            <input type="text" name="product_code" class="form-control" placeholder="Products Code"
                value="{{ $product->product_code }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" placeholder="Description"readonly>{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Create At</label>
            <input type="text" name="create_at" class="form-control" placeholder="Create At"
                value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Update At"
                value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection
