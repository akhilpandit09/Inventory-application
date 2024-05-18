<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AnalyticsController;
// use Illuminate\Http\Request;
use App\Models\product;

class HomeController extends Controller
{
    //
    public function index()
    {
        $products = product::all();

        $totalPrice = $products->sum('price');

        $totalProducts = $products->count();

        // $remainingProducts = $totalProducts - $products->where('stock', 0)->count();
        $remainingProducts = 0;
        
        $analyticsController = new AnalyticsController();
        $priceRangesJson = $analyticsController->priceRanges();

        return view("pages.home.home", [
            'products' => $products,
            'totalPrice' => $totalPrice,
            'totalProducts' => $totalProducts,
            'remainingProducts' => $remainingProducts,
            'priceRangesJson' => $priceRangesJson,
        ]);
    }
}
