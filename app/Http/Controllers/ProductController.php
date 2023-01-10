<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function searchProduct(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);

        return response()->json(Product::search($request->search));
    }
}
