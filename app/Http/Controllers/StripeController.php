<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Product;

class StripeController extends Controller
{
    public function getProducts()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $products = Product::all();

        return response()->json($products->data);
    }
}
