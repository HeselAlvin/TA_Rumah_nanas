<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function storage(request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'total_price' => 'required',
        ]);
        $order = Order::create($validated);

        return response()->json([
            'message' => 'Order created successfully',
            'order' => $order
        ], 201);
    }
}
