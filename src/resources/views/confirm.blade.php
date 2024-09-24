@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Confirm</h2>
    <form method="POST" action="{{ url('/contact/send') }}">
        @csrf
        <table class="table">
    <tr>
        <th>お名前</th>
        <td>{{ $input['name'] ?? '' }}</td>
    </tr>
    <tr>
        <th>性別</th>
        <td>{{ $input['gender'] ?? '' }}</td>
    </tr>
    <tr>
        <th>メールアドレス</th>
        <td>{{ $input['email'] ?? '' }}</td>
    </tr>
    <tr>
        <th>電話番号</th>
        <td>{{ $input['phone'] ?? '' }}</td>
    </tr>
    <tr>
        <th>住所</th>
        <td>{{ $input['address'] ?? '' }}</td>
    </tr>
    <tr>
        <th>問い合わせ内容</th>
        <td>{{ $input['message'] ?? '' }}</td>
    </tr>
</table>

        <button type="submit" class="btn btn-primary">送信</button>
        <button type="button" onclick="history.back()" class="btn btn-secondary">修正</button>
    </form>
</div>
@endsection