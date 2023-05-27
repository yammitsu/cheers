@extends('layouts.app')

@section('content')

<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">名前</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="comment">コメント</label>
        <textarea name="comment">{{ old('comment') }}</textarea>
        @error('comment')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="base">ベース</label>
        <select id="select_form" name="base">
                    <option value="0" selected>ノンアルコール</option>
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
        @error('base')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="taste">味</label>
        <input type="radio" name="taste" value="甘口" @if(old('taste') === '甘口') checked @endif>甘口
        <input type="radio" name="taste" value="中甘口" @if(old('taste') === '中甘口') checked @endif>中甘口
        <input type="radio" name="taste" value="中口" @if(old('taste') === '中口') checked @endif>中口
        <input type="radio" name="taste" value="中辛口" @if(old('taste') === '中辛口') checked @endif>中辛口
        <input type="radio" name="taste" value="辛口" @if(old('taste') === '辛口') checked @endif>辛口
        @error('taste')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="feature">特徴</label>
        <input type="text" name="feature" value="{{ old('feature') }}">
        @error('feature')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="material">材料</label>
        <input type="text" name="material" value="{{ old('material') }}">
        @error('material')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="image">画像</label>
        <input type="file" name="image">
        @error('image')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <button type="submit">投稿する</button>
</form>


@endsection