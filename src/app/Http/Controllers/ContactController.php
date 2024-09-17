<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function showForm()
    {
        return view('contact.form');
    }

    public function confirm()
    {
        return view('confirm');
    }

    public function thanks()
    {
        return view('thanks');
    }

    // public function submit(Request $request)
    // {
    //     // バリデーションや処理
    // $validated = $request->validate([
    //     'name' => 'required|string|max:255',
    //     'email' => 'required|email',
    //     'message' => 'required|string',
    // ]);

    // // フォームデータの処理（例: メール送信）
    
    // return redirect()->route('contact.thanks'); // サンクスページにリダイレクト
    // }
}
