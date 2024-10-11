<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\View\View;
class ProductController extends Controller
{
    public function Show(): View
    {
        return view('ProductPage', [
            'products' => Product::orderBy('name')->get()
        ]);
    }
    public function ShowProduct(string $id): View
    {
        return view('Product', [
            'product' => Product::findOrFail($id)->get()
        ]);
    }
    public function Order(Request $request)
    {
        $valitated= $request->validate([
            'id' => ['bail','required', 'numeric'],
            'amount' => ['bail','required', 'numeric'],
        ]);
        if($valitated){

            OrderProduct::insert(
                [
                    'idproduct' => $request->id,
                    'cost' => (Product::findOrFail($request->id)->get()[0]->cost * $request->amount),
                    'amount' => $request->amount,
                ]
            );
            return redirect('/')->with('status', '');
        }
        return redirect('/dsdad')->with('status', '');

    }
}
