<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\View\View;
class ProductController extends Controller
{
    public function show(): View
    {
        return view('ProductPage', [
            'products' => ProductModel::orderBy('name')->get()
        ]);
    }
}
