<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $userCount = User::count();

        $totalPrice = Product::sum('price');
        Log::info('Total Price Calculated: ' . $totalPrice);

        return view('dashboard', compact(
            'productCount',
            'userCount',
            'totalPrice'
        ));
    }
}
