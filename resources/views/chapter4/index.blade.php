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
    <form action="/chapter4" method="post">
        <table>
            @csrf
            <tr>
                <th>name:</th>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <th>mail:</th>
                <td><input type="text" name="mail" id=""></td>
            </tr>
            <tr>
                <th>age:</th>
                <td><input type="text" name="age" id=""></td>
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
