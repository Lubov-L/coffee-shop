<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all();

        return view('admin.products', compact('products'));
    }

    public function store(ProductRequest $request): JsonResponse
    {
        Product::query()->create($request->validated());

        return response()->json(['success' => true, 'message' => 'Product created']);
    }

    public function show(Product $product): JsonResponse
    {
        return response()->json(['product' => $product]);
    }

    public function update(ProductRequest $request, Product $product): JsonResponse
    {
        $product->update($request->validated());

        return response()->json(['success' => true, 'message' => 'Product updated']);
    }

    public function destroy(Product $product): JsonResponse
    {
        $product->delete();

        return response()->json(['success' => true, 'message' => 'Product deleted']);
    }
}
