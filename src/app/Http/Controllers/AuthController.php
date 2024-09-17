<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register'); // 「auth.register」ビューにリダイレクト
    }

    public function login()
    {
        return view('auth.login'); // 「auth.login」ビューにリダイレクト
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // ユーザーを作成する処理
    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']),
    ]);

    // ログイン処理（例: 認証後にログイン）
    Auth::login($user);

    return redirect()->route('home'); // ホームページにリダイレクト
}
    //copy
}
