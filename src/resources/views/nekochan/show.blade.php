@extends('layouts.parent')
@section('content')
<!-- Page content-->
<div class="container-fluid">
    <h1 class="mt-4">{{ $nekochan->name }}ちゃん詳細</h1>
    <table>
    <tr>
        <th>名前</th>
        <th>誕生日</th>
        <th>登録日時</th>
        <th>更新日時</th>
    </tr>
    <tr>
        <td>{{ $nekochan->name }}</td>
        <td>{{ $nekochan->birthday }}</td>
        <td>{{ $nekochan->created_at->format('Y/m/d H:i:s') }}</td>
        <td>{{ $nekochan->updated_at->format('Y/m/d H:i:s') }}</td>
    </tr>
    </table>
</div>
@endsection
