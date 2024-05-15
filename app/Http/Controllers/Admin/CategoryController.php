<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();

        return view('admin.categories', compact('categories'));
    }

    public function store(CategoryRequest $request): JsonResponse
    {
        Category::query()->create($request->validated());

        return response()->json(['success' => true, 'message' => 'Category created']);
    }

    public function show(Category $category): JsonResponse
    {
        return response()->json(['Category' => $category]);
    }

    public function update(CategoryRequest $request, Category $category): JsonResponse
    {
        $category->update($request->validated());

        return response()->json(['success' => true, 'message' => 'Category updated']);
    }

    public function destroy(Category $category): JsonResponse
    {
        $category->delete();

        return response()->json(['success' => true, 'message' => 'Category deleted']);
    }
}
