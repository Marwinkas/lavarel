<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;
class ProductController extends Controller
{
    public function Show(): View
    {
        return view('ProductPage', [
            'products' => Product::orderBy(column: 'name')->get()
        ]);
    }
    public function ShowProduct(string $id): View
    {
        return view('Product', [
            'product' => Product::findOrFail($id)
        ]);
    }
        public function Order(Request $request)
        {
            $valitated= $request->validate([
                'id' => ['bail','required', 'numeric'],
                'amount' => ['bail','required', 'numeric'],
            ]);
            if($valitated){
    
                OrderProduct::create(
                    [
                        'product_id' => $request->id,
                        'cost' => (Product::findOrFail($request->id)->cost * $request->amount),
                        'amount' => $request->amount,
                        'user_id' => Auth::id(),
                        'status' => "Новый",
                         
                    ]
                );
                return redirect('/')->with('status', '');
            }
            return redirect('/')->with('status', '');
    
        }
}
