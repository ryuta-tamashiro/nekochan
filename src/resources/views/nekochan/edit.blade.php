@extends('layouts.parent')
@section('content')
<!-- Page content-->
<div class="container-fluid">
    <h1 class="font-weight-light mt-4">{{ $nekochan->name }}ちゃん情報編集</h1>
    <form method="POST" action="{{ route('nekochan.update',['id' => $nekochan->id]) }}">
        @csrf
        <table class="table" style="width: 1000px; max-width: 0 auto;">
        <tr class="table-info">
            <th>名前</th>
            <th>誕生日</th>
        </tr>
        <tr>
            <td><input type="text" name=name value="{{$nekochan->name}}" class="form-control @if($errors->has('name')) is-invalid @endif" required></td>
            @if($errors->has('name'))
                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
            @else
                <div class="invalid-feedback">必須項目です</div><!--HTMLバリデーション-->
            @endif
            <td><input type="text" name=birthday value="{{$nekochan->birthday}}" class="form-control"></td>
        </tr>
        </table>
    <input type="submit" class="btn btn-primary btn-block" value="更新する">
    </form>
</div>
@endsection
