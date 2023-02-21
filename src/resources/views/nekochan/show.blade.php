@extends('layouts.parent')
@section('content')
<!-- Page content wrapper-->
<div id="page-content-wrapper">
    <!-- Top navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#!">Action</a>
                            <a class="dropdown-item" href="#!">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
</div>
@endsection
