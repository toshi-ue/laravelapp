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
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
@endsection

@section('footer')
copyright 2022 toshi-ue.
@endsection
