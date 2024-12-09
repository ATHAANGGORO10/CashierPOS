@extends('layouts.app')

@section('title', 'Table data product')

@section('contents')
    @if (Session::has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    toast: 'true',
                    position: 'bottom-end',
                    icon: 'success',
                    text: '{{ Session::get('success') }}',
                    showConfirmButton: false,
                    timer: 5500,
                    showClass: {
                        popup: 'animate__animated animate__fadeInRight'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutRight'
                    }
                });
            });
        </script>
    @endif
    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <div class="table-responsive" style="max-height: 420px; max-width: 200rem;">
                <table class="table table-bordered">
                    <thead class="bg-light">
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
                                    <td class="text-center">Rp {{ number_format($rs->price) }}</td>
                                    <td class="text-center">{{ $rs->product_code }}</td>
                                    <td class="text-center">
                                        {{ $rs->description }}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('products.show', $rs->id) }}" class="mx-3 text-decoration-none">
                                            <i class="bi-eye-fill text-primary"></i>
                                        </a>
                                        <a href="{{ route('products.edit', $rs->id) }}" class="mx-3 text-decoration-none">
                                            <i class="bi-pencil-square text-dark"></i>
                                        </a>
                                        <a href="#" class="mx-3 text-decoration-none"
                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $rs->id }}').submit();">
                                            <i class="bi-trash3-fill text-danger"></i>
                                        </a>
                                    </td>
                                    <form id="delete-form-{{ $rs->id }}"
                                        action="{{ route('products.destroy', $rs->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-uppercase text-primary" colspan="10">data product not found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="d-flex align-items-center bg-white pt-2">
                <a href="{{ route('products.create') }}" class="btn btn-primary py-2 px-4">
                    <i class="bi-plus-circle mr-1"></i>
                    Create Products
                </a>
            </div>
        </div>
    </div>
@endsection
