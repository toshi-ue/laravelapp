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
    <p>ここが本文のコンテンツです</p>
    <p>必要なだけ記述できます</p>
    @component('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot

        @slot('msg_content')
        これはメッセージです
        @endslot
    @endcomponent

    {{-- サブビュー --}}
    @include('components.message', [
        'msg_title'=>'OK',
        'msg_content' => 'サブビューです'
    ])
@endsection

@section('footer')
    copyright 2022 toshi-ue.
@endsection
