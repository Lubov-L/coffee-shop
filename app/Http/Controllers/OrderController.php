<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(): View
    {
        $orders = Order::all();

        return view('layouts.order', compact($orders));
    }

    public function store(OrderRequest $request): JsonResponse
    {
        Order::query()->create($request->validated());

        return response()->json(['success' => true, 'message' => 'Order created']);
    }

    public function show(Order $order): JsonResponse
    {
        return response()->json(['order' => $order]);
    }

    public function update(OrderRequest $request, Order $order): JsonResponse
    {
        $order->update($request->validated());

        return response()->json(['success' => true, 'message' => 'Order updated']);
    }

    public function destroy(Order $order): JsonResponse
    {
        $order->delete();

        return response()->json(['success' => true, 'message' => 'Order deleted']);
    }
}
