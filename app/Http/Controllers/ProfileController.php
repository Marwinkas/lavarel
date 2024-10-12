<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function Show(): View
    {
        return view('ProfilePage', [
            'products' => OrderProduct::where('user_id', Auth::user()->getAuthIdentifier())->get(),
        ]);
    }
}
