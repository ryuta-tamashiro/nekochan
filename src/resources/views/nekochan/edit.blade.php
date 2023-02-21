@extends('layouts.parent')
@section('content')
<!-- Page content-->
<div class="container-fluid">
    <h1 class="mt-4">{{ $nekochan->name }}ちゃん情報編集</h1>
    <form method="POST" action="{{ route('nekochan.update',['id' => $nekochan->id]) }}">
        @csrf
        <table>
        <tr>
            <th>名前</th>
            <th>誕生日</th>
        </tr>
        <tr>
            <td><input type="text" name=name value="{{$nekochan->name}}"></td>
            <td><input type="text" name=birthday value="{{$nekochan->birthday}}"></td>
        </tr>
        </table>
    <input type="submit" value="更新する">
    </form>
</div>
@endsection
