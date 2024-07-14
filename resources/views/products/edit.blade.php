@extends('layouts.app')

@section('title', 'edit product')

@section('contents')
    <form class="mt-4" action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <h5 class="mb-3">Title Product :</h5>
                <input type="text" name="title" class="form-control form-control-lg border border-dark" placeholder="Title"
                    value="{{ $product->title }}" required>
            </div>
            <div class="col mb-3">
                <h5 class="mb-3">Price Product :</h5>
                <input type="number" name="price" class="form-control form-control-lg border border-dark"
                    placeholder="Price" value="{{ $product->price }}" required>
            </div>
            <div class="col mb-3">
                <h5 class="mb-3">Product Code :</h5>
                <input type="text" name="product_code" class="form-control form-control-lg border border-dark"
                    placeholder="Products Code" value="{{ $product->product_code }}" required>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col mb-4">
                <h5 class="mb-3">Description :</h5>
                <textarea name="description" class="form-control form-control-lg border border-dark outline-none"
                    placeholder="Description" required rows="5" style="resize: none">{{ $product->description }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary px-4 py-2 mr-2">
                    <i class="bi-pencil-square mr-1"></i>
                    Add Edit
                </button>
                <button type="reset" class="btn btn-primary px-4 py-2">
                    <i class="bi-archive-fill mr-1"></i>
                    Reset Edit
                </button>
            </div>
        </div>
    </form>
@endsection
