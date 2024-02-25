<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }

    public function store(UserRequest $request): JsonResponse
    {
        User::query()->create($request->validated());

        return response()->json(['success' => true, 'message' => 'User created']);
    }

    public function show(User $user): View
    {
        return view('admin.user', compact('user'));
    }

    public function update(UserRequest $request, User $user): JsonResponse
    {
        $user->update($request->validated());

        return response()->json(['success' => true, 'message' => 'User updated']);
    }

    public function destroy(User $user): JsonResponse
    {
        $user->delete();

        return response()->json(['success' => true, 'message' => 'User deleted']);
    }
}
