<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response as Code;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('layouts.product');
    }

    public function store(ProductRequest $request): JsonResponse
    {
        Product::query()->create($request->validated());

        return response()->json(['success' => true, 'message' => 'Product created']);
    }

    public function show(int $id): JsonResponse
    {
        $product = Product::query()->findOrFail($id);

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not found'], Code::HTTP_NOT_FOUND);
        }

        return response()->json(['product' => $product]);
    }

    public function update(ProductRequest $request, Product $product): JsonResponse
    {
        $product->update($request->validated());

        return response()->json(['success' => true, 'message' => 'Product updated']);
    }

    public function destroy(int $id): JsonResponse
    {
        $product = Product::query()->findOrFail($id);

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not found'], Code::HTTP_NOT_FOUND);
        }

        $product->delete();

        return response()->json(['success' => true, 'message' => 'Product deleted']);
    }
}
