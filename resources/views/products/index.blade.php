@extends('layouts.app')

@section('contents')
    @if (Session::has('success'))
        <div class="alert alert-success mt-4" role="start">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table mt-4">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Title Product</th>
                <th class="text-center">Price Product</th>
                <th class="text-center">Products Code</th>
                <th class="text-center">Description Product</th>
                <th class="text-center">Action Product</th>
            </tr>
        </thead>
        <tbody>
            @if ($product->count() > 0)
                @foreach ($product as $rs)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $rs->title }}</td>
                        <td class="text-center">{{ $rs->price }}</td>
                        <td class="text-center">{{ $rs->product_code }}</td>
                        <td class="text-center">{{ $rs->description }}</td>
                        <td class="text-center">
                            <a href="{{ route('products.show', $rs->id) }}" class="btn mr-1">
                                <i class="fas fa-fw fa-eye"></i>
                            </a>
                            <a href="{{ route('products.edit', $rs->id) }}" class="btn mr-1">
                                <i class="fas fa-fw fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('products.destroy', $rs->id) }}" method="POST" class="btn">
                                @csrf
                                @method('DELETE')
                                <i class="fas fa-fw fa-recycle"></i>
                            </form>
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
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('products.create') }}" class="btn btn-primary py-2 px-3">Add Products</a>
    </div>
@endsection
