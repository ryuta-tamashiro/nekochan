@extends('layouts.parent')
@section('content')
<!-- Page content-->
<div class="container-fluid">
<h1 class="font-weight-light mt-4">新規作成</h1>
    <form method="POST" action="{{route('nekochan.store')}}">
        @csrf
        <!--名前-->
        <div class="form-group row">
            <label for="form-name" class="col-sm-2 col-form-label">名前</label>
            <div class="col-sm-10">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control @if($errors->has('name')) is-invalid @endif" id="form-name" placeholder="ネコチャン" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                @else
                    <div class="invalid-feedback">必須項目です</div><!--HTMLバリデーション-->
                @endif
            </div>
        </div>
        <!--/名前-->

        <!-- 生年月日 -->
        <div class="form-group row">
            <label for="form-birthday" class="col-sm-2 col-form-label">生年月日</label>
            <div class="col-sm-10">
                <input type="text" name="birthday" value="{{ old('birthday') }}" class="form-control" id="form-birthday" placeholder="20220222">
            </div>
        </div>
        <!-- /生年月日 -->

        <!--登録ボタン-->
        <div class="form-group row mt-5">
            <div class="col-sm-12">
            <button type="submit" class="btn btn-primary btn-block">登録</button>
            </div>
        </div>
        <!--/登録ボタン-->
    </form>
</div>
@endsection
