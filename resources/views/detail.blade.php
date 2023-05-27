@extends('layouts.app')

@section('content')


<div class="about">
    <table class="text-light box">
        <tr>
            <th>カクテル名</th>
            <td>{{ $cocktails_detail['cocktail']['cocktail_name'] }}</td>
        </tr>
        <tr>
            <th>アルコール度数</th>
            <td>{{ $cocktails_detail['cocktail']['alcohol'] }}(度)</td>
        </tr>
        <tr>
            <th>要約</th>
            <td>{{ $cocktails_detail['cocktail']['cocktail_digest'] }}</td>
        </tr>
        <tr>
            <th>詳細</th>
            <td>{{ $cocktails_detail['cocktail']['cocktail_desc'] }}</td>
        </tr>
        <tr>
            <th>作り方</th>
            <td>{{ $cocktails_detail['cocktail']['recipe_desc'] }}</td>
        </tr>
        <tr>
            <th>材料</th>
        </tr>
    @foreach($cocktails_detail['cocktail']['recipes'] as $recipe)
        <tr>
            <th>{{ $recipe['ingredient_name'] }}</th>
            <td>{{ $recipe['amount'] }} {{ $recipe['unit'] }}</td>
        </tr>
    @endforeach
    </table>
</div>


@endsection