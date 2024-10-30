<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\OrderProduct;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function Show(): View
    {

        if (Auth::user()->privilages === "admin") {
            $products = OrderProduct::all();
        } else {
            $products = OrderProduct::where('user_id', Auth::id())->get();
        }
        return view('ProfilePage', [
            'products' => $products
        ]);
    }

    public function UpdateStatus(Request $request)
    {
        $statusesOrder = [
            "Новый" => 0,
            "Одобрен" => 1,
            "Доставлен" => 2,
        ];

        $order = OrderProduct::findOrFail($request->id);
        $product = $order->product;

        if ($statusesOrder[$request->status] - $statusesOrder[$order->status] === 1){
            $order->status = $request->status;
            $order->save();
        }

        if ($order->status == "Доставлен" && $product->amount >= $order->amount) {
            $order->status = $request->status;
            $product->amount -= $order->amount;
            $product->save();
        }

        return redirect('/profile')->with('status', '');
    }
}
