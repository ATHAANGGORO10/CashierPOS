<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $userCount = User::count();

        $totalPrice = Product::sum('price');

        return view('dashboard', compact(
            'productCount',
            'userCount',
            'totalPrice'
        ));
    }
}
