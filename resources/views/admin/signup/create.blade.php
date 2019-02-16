<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SignUp</title>
    </head>
    <body>
      <h1>ユーザー登録</h1>
    </body>
</html>

{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'新規ユーザー登録'を埋め込む --}}
@section('title', '新規ユーザー登録')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>新規ユーザー登録</h2>
            </div>
        </div>
    </div>
@endsection