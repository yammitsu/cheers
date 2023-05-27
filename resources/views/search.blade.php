@extends('layouts.app')

@section('content')


<div class="about">
    <table class="text-light box">
        @foreach($cocktails['cocktails'] as $cocktail)
        <div>
        <tr>
            <th>カクテル名</th>
            <th>英語名</th>
            <th>説明</th>
            <th>ベース</th>
            <th>味わい</th>
            <th>アルコール度数</th>
        </tr>
        <tr>
            <td>{{ $cocktail['cocktail_name'] }}</td>
            <td>{{ $cocktail['cocktail_name_english'] }}</td>
            <td>{{ $cocktail['cocktail_digest'] }}</td>
            <td>{{ $cocktail['base_name'] }}</td>
            <td>{{ $cocktail['taste_name'] }}</td>
            <td>{{ $cocktail['alcohol'] }}</td>
            <td>
                <form action="{{ url('/detail') }}" method="GET">
                    <input type="hidden" name="cocktail_id" value="{{ $cocktail['cocktail_id'] }}">
                    <button type="submit" class="btn btn-neutral btn-lg text-light mx-2 about_btn">詳細</button>
                </form>
            </td>
        </tr>
        </div>
        @endforeach
    </table>
</div>


@endsection