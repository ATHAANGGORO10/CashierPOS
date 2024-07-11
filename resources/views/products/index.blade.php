@extends('layouts.app')

@section('title', 'Home Products')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Products</a>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success mt-4" role="start">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Price</th>
                <th>Products Code</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($product->count() > 0)
                @foreach ($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->price }}</td>
                        <td class="align-middle">{{ $rs->product_code }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="" type="button" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger m-0">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Products not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
