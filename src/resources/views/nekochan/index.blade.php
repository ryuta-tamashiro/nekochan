@extends('layouts.parent')
@section('content')
<!-- Page content-->
<div class="container-fluid">
    <h1 class="font-weight-light mt-4">猫ちゃん一覧</h1>
    <table class="table" style="width: 1000px; max-width: 0 auto;">
        <tr class="table-info">
            <th>名前</th>
            <th>誕生日</th>
            <th>登録日時</th>
            <th>更新日時</th>
            <th></th>
        </tr>
        @foreach($nekochans as $nekochan)
        <tr>
            <td>{{ $nekochan->name }}</td>
            <td>{{ $nekochan->birthday }}</td>
            <td>{{ $nekochan->created_at->format('Y/m/d H:i:s') }}</td>
            <td>{{ $nekochan->updated_at->format('Y/m/d H:i:s') }}</td>
            <td><a button type="button" class="btn btn-success" href="{{ route('nekochan.show', ['id' => $nekochan->id]) }}">詳細</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
