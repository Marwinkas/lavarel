<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\BuyModel;
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
        public function showCard(string $id): View
        {
        return view('Product', [
            'product' => ProductModel::findOrFail($id)->where('id', $id)->get()
        ]);
    }
    public function store(Request $request)
    {
        BuyModel::insert([
            'name' => $request->name,
            'amount' => $request->amount,
            'cost' => $request->cost,]
        );
        return redirect('/')->with('status', '');
    }
}
