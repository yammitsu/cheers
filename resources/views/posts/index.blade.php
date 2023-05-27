@extends('layouts.app')

@section('content')

@foreach ($posts as $post)
<div class="text-light">
<h2>{{ $post->name }}</h2>
<p>{{ $post->comment }}</p>
<p>{{ $post->base }}</p>
<p>{{ $post->taste }}</p>
<p>{{ $post->feature }}</p>
<p>{{ $post->material }}</p>
@if ($post->image)
<img src="{{ asset('images/' . $post->image) }}" alt="">
@endif
@if($login_id == $post->user_id)
<p>投稿者：{{ $post->user->name }}</p>
<p>投稿日時：{{ $post->created_at }}</p>
<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit">削除</button>
</form>
<form action="{{ route('posts.edit', ['id' => $post->id]) }}" method="POST">
@csrf
<button type="submit">編集</button>
</form>
</div>
@endif
@endforeach

@endsection