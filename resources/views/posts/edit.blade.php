@extends('layouts.app')

@section('content')

<form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <h2>{{ $post->name }}</h2>
    </div>
    <div>
        <label for="comment">コメント</label>
        <textarea name="comment">{{ old('comment', $post->comment) }}</textarea>
        @error('comment')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="base">ベース</label>
        <select name="base">
            <option value="" @if(old('base', $post->base) == '') selected @endif>選択無し</option>
            <option value="ノンアルコール" @if(old('base', $post->base) == 'ノンアルコール') selected @endif>ノンアルコール</option>
            <option value="ジン" @if(old('base', $post->base) == 'ジン') selected @endif>ジン</option>
            <option value="ウォッカ" @if(old('base', $post->base) == 'ウォッカ') selected @endif>ウォッカ</option>
            <option value="テキーラ" @if(old('base', $post->base) == 'テキーラ') selected @endif>テキーラ</option>
            <option value="ラム" @if(old('base', $post->base) == 'ラム') selected @endif>ラム</option>
            <option value="ウイスキー" @if(old('base', $post->base) == 'ウィスキー') selected @endif>ウイスキー</option>
            <option value="ブランデー" @if(old('base', $post->base) == 'ブランデー') selected @endif>ブランデー</option>
            <option value="リキュール" @if(old('base', $post->base) == 'リキュール') selected @endif>リキュール</option>
            <option value="ワイン" @if(old('base', $post->base) == 'ワイン') selected @endif>ワイン</option>
            <option value="ビール" @if(old('base', $post->base) == 'ビール') selected @endif>ビール</option>
            <option value="日本酒" @if(old('base', $post->base) == '日本酒') selected @endif>日本酒</option>
        </select>
        @error('base')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="taste">味</label>
        <select name="taste">
            <option value="" @if(old('base', $post->base) == '') selected @endif>選択無し</option>
            <option value="甘口" @if(old('taste', $post->taste) === '甘口') selected @endif>甘口</option>
            <option value="中甘口" @if(old('taste', $post->taste) === '中甘口') selected @endif>中甘口</option>
            <option value="中口" @if(old('taste', $post->taste) === '中口') selected @endif>中口</option>
            <option value="中辛口" @if(old('taste', $post->taste) === '中辛口') selected @endif>口</option>
            <option value="辛口" @if(old('taste', $post->taste) === '辛口') selected @endif>辛口</option>
        </select>
        @error('taste')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="feature">特徴</label>
        <input type="text" name="feature" value="{{ old('feature', $post->feature) }}">
        @error('feature')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="material">材料</label>
        <input type="text" name="material" value="{{ old('material', $post->material) }}">
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
        @if($post->image)
            <p>現在の画像:</p>
            <img src="{{ asset('storage/' . $post->image) }}" alt="投稿画像">
        @endif
    </div>
        <button type="submit">更新する</button>

</form>

@endsection