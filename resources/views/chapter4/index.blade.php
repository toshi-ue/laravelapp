{{--
    layouts/helloappp.blade.phpをロード、親レイアウトとして継承する
--}}
@extends('layouts.helloapp')

{{-- 文字列をセクションに表示させる --}}
@section('title', 'Index')


@section('menubar')
    {{--
        親レイアウトのセクションを示す。
        親にあるセクションをのこしてひょうじ
         --}}
    @parent
    インデックスページ
@endsection

@section('content')
    {{-- <p>ここが本文のコンテンツです</p>
    <p>これは<middleware>google.com</middleware>へのリンクです。</p>
    <p>これは<middleware>yahoo.co.jp</middleware>へのリンクです。</p> --}}
    <p>{{ $msg }}</p>
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/chapter4" method="post">
        <table>
            @csrf
            <tr>
                <th>name:</th>
                <td><input type="text" name="name" id="" value="{{ old('name') }}"></td>
            </tr>
            <tr>
                <th>mail:</th>
                <td><input type="text" name="mail" id="" value="{{ old('mail') }}"></td>
            </tr>
            <tr>
                <th>age:</th>
                <td><input type="text" name="age" id="" value="{{ old('age') }}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2022 toshi-ue.
@endsection
