@extends('layouts.app')

@section('title', 'Create Products')

@section('contents')
    <form class="pt-4" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <h5 class="mb-3">Title Product :</h5>
                <input type="text" name="title" class="form-control form-control-lg border border-dark" placeholder="Title" required>
            </div>
            <div class="col mb-3">
                <h5 class="mb-3">Price Product :</h5>
                <input type="number" name="price" class="form-control form-control-lg border border-dark" placeholder="Price" id="price" required>
            </div>
            <div class="col mb-3">
                <h5 class="mb-3">Product Code :</h5>
                <input type="text" name="product_code" class="form-control form-control-lg border border-dark" placeholder="Products Code" required>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col mb-4">
                <h4 class="mb-3">Description :</h4>
                <textarea name="description" class="form-control form-control-lg border border-dark" required rows="5" placeholder="Description" style="resize: none"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary px-4 py-2">
                    <i class="bi-plus-square mr-1"></i>
                    Add Product
                </button>
            </div>
        </div>
    </form>
@endsection
