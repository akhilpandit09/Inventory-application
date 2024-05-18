<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\product;


class AnalyticsController extends Controller
{
    public function index()
    {
        $priceRangesJson = $this->priceRanges();
        return view('pages.analytics.analyticsMain', compact('priceRangesJson'));
    }

    public function priceRanges()
    {
        $priceRanges = [
            '0-1000' => Product::whereBetween('price', [0, 1000])->count(),
            '1001-5000' => Product::whereBetween('price', [1001, 5000])->count(),
            '5001-10000' => Product::whereBetween('price', [5001, 10000])->count(),
            '10001-20000' => Product::whereBetween('price', [10001, 20000])->count(),
        ];
        $priceRangesJson = json_encode($priceRanges);
        return $priceRangesJson;
    }
}
