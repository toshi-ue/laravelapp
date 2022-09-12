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
    {{-- コンポーネントを読み込む --}}
    <h3>コンポーネントを読み込む</h3>
    @component('components.message')
        {{-- スロットについて --}}
        @slot('msg_title')
        CAUTION!
        @endslot

        @slot('msg_content')
        これはメッセージです
        @endslot
    @endcomponent

    {{-- message.blade.phpをサブビューで読み込む --}}
    <h3>message.blade.phpをサブビューで読み込む</h3>
    @include('components.message', [
        'msg_title'=>'OK',
        'msg_content' => 'サブビューです'
    ])

    {{-- @eachによるコレクションビュー(@eachによる表示を利用する) --}}
    <h3>&#064;eachによるコレクションビュー(&#064;eachによる表示を利用する)</h3>
    <ul>
        @each('components.item', $data , 'item')
    </ul>
@endsection

@section('footer')
    copyright 2022 toshi-ue.
@endsection
