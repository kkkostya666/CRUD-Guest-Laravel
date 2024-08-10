<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(UserRequest $request)
    {
        return response()->json(User::create($request->validated()), 201);
    }

    public function show(User $guest)
    {
        return response()->json($guest);
    }

    public function update(UserRequest $request, User $guest)
    {
        $guest->update($request->validated());
        return response()->json(['success' => $guest]);
    }

    public function destroy(User $guest)
    {
        $guest->delete();
        return response()->json($guest, 204);
    }
}
