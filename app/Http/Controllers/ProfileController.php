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
        if(User::where('id', Auth::id())->get()[0]->privilages == "admin"){
            return view('ProfilePage', [
                'products' => OrderProduct::get(),
                'adminprivilages' => User::where('id', Auth::id())->first()
            ]);
        }
        return view('ProfilePage', [
            'products' => OrderProduct::where('user_id', Auth::id())->get(),
            'adminprivilages' => User::where('id', Auth::id())->first(),
            
        ]);
    }
    public function UpdateStatus(Request $request)
    {
        $post = OrderProduct::findOrFail($request->id);
        $product = Product::where("id", $post->product_id)->first();
        if($request->status == "Одобрен" && $post->status != "Доставлен") $post->status = $request->status;
        else if ($request->status == "Доставлен" && $post->status != "Доставлен") {
            if ($product && $product->amount -  $post->amount > 0) {
                $post->status = $request->status;
                $product->amount -= $post->amount;
                $product->save();
                // Optionally save the post here if needed
            }

        }


        else if($request->status == "Доставлен" && $post->amount - Product::where("id", $post->product_id)->amount > 0){$post->status = $request->status;
        
        $product = Product::findOrFail($request->id);


    }

        $post->save();
        
        return redirect('/profile')->with('status', '');

    }
}
