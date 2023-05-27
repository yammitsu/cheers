<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CocktailController extends Controller
{
    public function search(Request $request){

        // GuzzleHTTPのインスタンスを作成
        $client = new Client();

        //入力フォームから値を受け取る
        $word = $request->input('word','');
        $base = $request->input('base','');
        $taste = $request->input('taste','');
        $alcohol = $request->input('alcohol','');

        //API先にデータを飛ばして所得する
        $response = $client->request('GET','https://cocktail-f.com/api/v1/cocktails',[
            'query' => [
                'word' => $word,
                'base' => $base,
                'taste' => $taste,
                'alcohol' => $alcohol,
            ]
        ]);

        //取得したデータを入れる
        $body = $response->getBody();

        //データを配列に変換
        $cocktails = json_decode($body, true);

        // dd($cocktails);

        if(empty($cocktails_detail['cocktails'])){
            return view('notfound');
        };
        
        //表示するためにViewにデータを渡す
        return view('search',[
            'cocktails' => $cocktails
        ]);
    }

    public function detail(Request $request){

        // GuzzleHTTPのインスタンスを作成
        $client = new Client();

        //入力フォームから値を受け取る
        $cocktail_id = $request->input('cocktail_id');

        //API先にデータを飛ばして所得する //リクエスト先https://cocktail-f.com/api/v1/cocktails/[:id]のidにカクテルIDを直接入れてリクエスト
        $response = $client->request('GET','https://cocktail-f.com/api/v1/cocktails/'.$cocktail_id);

        //取得したデータを入れる
        $body = $response->getBody();

        //データを配列に変換
        $cocktails_detail = json_decode($body, true);

        // dd($cocktails_detail);

        //表示するためにViewにデータを渡す
        return view('detail',[
            'cocktails_detail' => $cocktails_detail
        ]);

    }

}