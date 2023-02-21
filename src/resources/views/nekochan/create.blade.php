@extends('layouts.parent')
@section('content')
<!-- Page content-->
<div class="container-fluid">
<h1>新規作成</h1>
    <form method="POST" action="{{route('nekochan.store')}}">
        @csrf
        <div>
            <label for="form-name">名前</label>
            <input type="text" name="name" id="form-name" required>
        </div>
        <div>
            <label for="form-birthday">生年月日</label>
            <input type="text" name="birthday" id="form-birthday">
        </div>
        <button type="submit">登録</button>
    </form>
</div>
@endsection
