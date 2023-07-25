@extends('layouts.parent')
@section('content')
<!-- Page content-->
<div class="container-fluid">
    <h1 class="font-weight-light mt-4">{{ $nekochan->name }}ちゃん詳細</h1>
    <table class="table" style="width: 1000px; max-width: 0 auto;">
        <tr class="table-info">
            <th>名前</th>
            <th>誕生日</th>
            <th>登録日時</th>
            <th>更新日時</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>{{ $nekochan->name }}</td>
            <td>{{ $nekochan->birthday }}</td>
            <td>{{ $nekochan->created_at->format('Y/m/d H:i:s') }}</td>
            <td>{{ $nekochan->updated_at->format('Y/m/d H:i:s') }}</td>
            <td><a button type="button" class="btn btn-success" href="{{route('nekochan.edit',['id'=>$nekochan->id])}}">{{ __('編集') }}</a></td>
            <td>
                <form method="POST" action="{{route('nekochan.destroy',['id'=>$nekochan->id])}}">
                    @csrf
                    <button class="btn btn-danger" type="submit">削除</button>
                </form>
            </td>
        </tr>
    </table>
</div>
@endsection
