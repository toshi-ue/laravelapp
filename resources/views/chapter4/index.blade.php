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
    <p>入力に誤りがあります。再入力してください。</p>
    @endif
    <form action="/chapter4" method="post">
        <table>
            @csrf
            @if ($errors->has('name'))
                <tr>
                    <th>Error</th>
                    <td>{{ $errors->first('name') }}</td>
                </tr>
            @endif
            <tr>
                <th>name:</th>
                <td><input type="text" name="name" id="" value="{{ old('name') }}"></td>
            </tr>
            @if ($errors->has('mail'))
                <tr>
                    <th>Error</th>
                    <td>{{ $errors->first('mail') }}</td>
                </tr>
            @endif
            <tr>
                <th>mail:</th>
                <td><input type="text" name="mail" id="" value="{{ old('mail') }}"></td>
            </tr>
            @if ($errors->has('age'))
                <tr>
                    <th>Error</th>
                    <td>{{ $errors->first('age') }}</td>
                </tr>
            @endif
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
