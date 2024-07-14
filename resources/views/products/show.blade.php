@extends('layouts.app')

@section('title', 'views product')

@section('contents')
    <form class="mt-4">
        <div class="row">
            <div class="col mb-3">
                <h5 class="mb-3">Title Product :</h5>
                <input type="text" name="title" class="form-control form-control-lg border border-dark" value="{{ $product->title }}" readonly>
            </div>
            <div class="col">
                <h5 class="mb-3">Price Product :</h5>
                <input type="number" name="price" class="form-control form-control-lg border border-dark" value="{{ $product->price }}" readonly>
            </div>
            <div class="col">
                <h5 class="mb-3">Product Code : </h4>
                <input type="text" name="product_code" class="form-control form-control-lg border border-dark" value="{{ $product->product_code }}" readonly>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col mb-3">
                <h5 class="mb-3">Description :</h4>
                <textarea name="description" class="form-control form-control-lg border border-dark" required rows="5" readonly style="resize: none">{{ $product->description }}</textarea>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col mb-3">
                <h5 class="mb-3">Time Created : </h5>
                <input type="text" name="create_at" class="form-control form-control-lg border border-dark" value="{{ $product->created_at }}" readonly>
            </div>
            <div class="col mb-4">
                <h5 class="mb-3">Time Updated : </h5>
                <input type="text" name="updated_at" class="form-control form-control-lg border border-dark" value="{{ $product->updated_at }}" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{ route('products') }}" type="submit" class="btn btn-primary px-4 py-2">
                    <i class="bi-grid-fill mr-1"></i>
                    Back Data Product
                </a>
            </div>
        </div>
    </form>
@endsection
