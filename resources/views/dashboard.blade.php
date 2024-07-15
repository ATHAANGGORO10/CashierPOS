@extends('layouts.app')

@section('contents')
    <div class="row mt-4">
        <div class="col-md-6 mb-4">
            <div class="card border-left-primary shadow-sm h-100 py-2 bg-white">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">Amount of data product
                            </div>
                            <div class="h5 mb-2 font-weight-bold text-gray-800">
                                {{ $productCount }}
                            </div>
                            <p>
                                This amount of data functions as information about the amount of data entered into the
                                product data.
                                This aims to facilitate the distribution of information
                            </p>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card border-left-success shadow-sm h-100 py-2 bg-white">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-2">Number Users Active</div>
                            <div class="h5 mb-2 font-weight-bold text-gray-800">{{ $userCount }}</div>
                            <p>
                                The number of users functions as information about users accessing the control panel and
                                also
                                provides information that the control panel is being used
                            </p>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card border-left-warning shadow-sm h-100 py-2 bg-white">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-2">Total New Price product
                            </div>
                            <div class="h5 mb-2 font-weight-bold text-gray-800">
                                IDR {{ number_format($totalPrice, 0, ',', '.') }}
                            </div>
                            <p class="col pl-0">
                                The total price functions as information regarding the amount obtained from the product
                                order price and as information regarding product income
                            </p>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card border-left-danger shadow-sm h-100 py-2 bg-white">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-2">Total New Price
                                product
                            </div>
                            <div class="h5 mb-2 font-weight-bold text-gray-800">
                                150
                            </div>
                            <p class="col pl-0">
                                The total price functions as information regarding the amount obtained from the product
                                order price and as information regarding product income
                            </p>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
