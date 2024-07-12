@extends('layouts.app')

@section('contents')
    @include('layouts.alert')
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
                        <td class="text-center" style="white-space: nowrap; overflow-x: scroll;"">
                            {{ $rs->description }}
                        </td>                        
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('products.show', $rs->id) }}" class="mx-3">
                                <i class="bi-eye-fill text-primary"></i>
                            </a>
                            <a href="{{ route('products.edit', $rs->id) }}" class="mx-3">
                                <i class="bi-pencil-square text-dark"></i>
                            </a>
                            <a href="#" class="mx-3"
                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $rs->id }}').submit();">
                                <i class="bi-trash3-fill text-danger"></i>
                            </a>
                            <form id="delete-form-{{ $rs->id }}" action="{{ route('products.destroy', $rs->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>   
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10">Products not found</td>
                </tr>
            @endif
        </tbody>
    </table>
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('products.create') }}" class="btn btn-primary py-2 px-3">Add Products</a>
    </div>
@endsection
