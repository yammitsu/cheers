@extends('layouts.app')

@section('content')

<div class="body">

<div class="search mt-5">

  <form action="{{ url('/search') }}" method="GET">
  {{ csrf_field() }}
    <div class="freeword mt-5">
        <p class="text-light">フリーワード</p>
        <input id="word_form" type="text" name="word" maxlength="20" placeholder="ジン、ウォッカ、オレンジ、、、etc">
    </div>

    <div class="selecter mt-5">
        <div>
            <p class="text-light">お酒のベース</p>
                <select id="select_form" name="base">
                    <option value="" selected>選択無し</option>
                    <option value="0">ノンアルコール</option>
                    <option value="1">ジン</option>
                    <option value="2">ウォッカ</option>
                    <option value="3">テキーラ</option>
                    <option value="4">ラム</option>
                    <option value="5">ウイスキー</option>
                    <option value="6">ブランデー</option>
                    <option value="7">リキュール</option>
                    <option value="8">ワイン</option>
                    <option value="9">ビール</option>
                    <option value="10">日本酒</option>
                </select>
        </div>
        <div>
            <p class="text-light">甘口・辛口</p>
            <select id="select_form" name="taste">
                <option value="" selected>選択無し</option>
                <option value="1">甘口</option>
                <option value="2">中甘口</option>
                <option value="3">中口</option>
                <option value="4">中辛口</option>
                <option value="5">辛口</option>
            </select>
        </div>
        <div>
            <p class="text-light">アルコール度数</p>
            <select id="select_form" name="alcohol">
                <option value="" selected>選択無し</option>
                <option value="0">ノンアルコール</option>
                <option value="1-10">1~10(度) 弱め</option>
                <option value="11-20">11~20(度) 普通</option>
                <option value="21-30">21~30(度) やや強い</option>
                <option value="31-40">31~40(度) 強い</option>
                <option value="40-">40~(度) とても強い</option>
            </select>
        </div>
    </div>

    <input type="submit" class="btn btn-neutral btn-secondary btn-lg mt-5" value="お酒を検索する"></input>

  </form>

</div>

</div>


@endsection