<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $login_id = Auth::id();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts','login_id'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'comment' => 'required',
            'base' => 'nullable|in:ジン,テキーラ,ワイン',
            'taste' => 'nullable|in:甘口,辛口',
            'feature' => 'nullable',
            'material' => 'nullable',
            'image' => 'nullable|image',
        ]);

        $post = new Post();
        $post->name = $validatedData['name'];
        $post->comment = $validatedData['comment'];
        $post->base = $validatedData['base'];
        $post->taste = $validatedData['taste'];
        $post->feature = $validatedData['feature'];
        $post->material = $validatedData['material'];
        $post->user_id = auth()->id();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save(public_path('images/' . $filename));
            $post->image = $filename;
        }

        $post->save();

        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'comment' => 'required',
            'base' => 'nullable|in:ノンアルコール,ジン,ウォッカ,テキーラ,ラム,ウイスキー,ブランデー,リキュール,ワイン,ビール,日本酒',
            'taste' => 'nullable|in:甘口,中甘口,中口,中辛口,辛口',
            'feature' => 'nullable',
            'material' => 'nullable',
            'image' => 'nullable|image',
        ]);

        // 更新対象のデータを取得
        $post =  Post::find($id);

        $post->name = $validatedData['name'];
        $post->comment = $validatedData['comment'];
        $post->base = $validatedData['base'];
        $post->taste = $validatedData['taste'];
        $post->feature = $validatedData['feature'];
        $post->material = $validatedData['material'];

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     Image::make($image)->resize(300, 300)->save(public_path('images/' . $filename));
        //     $post->image = $filename;
        // }

        $post->save();
        return redirect()->route('posts.index');
    }
    // public function update(Request $request, Post $post)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required',
    //         'comment' => 'required',
    //         'base' => 'nullable|in:ノンアルコール,ジン,ウォッカ,テキーラ,ラム,ウイスキー,ブランデー,リキュール,ワイン,ビール,日本酒',
    //         'taste' => 'nullable|in:甘口,中甘口,中口,中辛口,辛口',
    //         'feature' => 'nullable',
    //         'material' => 'nullable',
    //         'image' => 'nullable|image',
    //     ]);

    //     $post->name = $validatedData['name'];
    //     $post->comment = $validatedData['comment'];
    //     $post->base = $validatedData['base'];
    //     $post->taste = $validatedData['taste'];
    //     $post->feature = $validatedData['feature'];
    //     $post->material = $validatedData['material'];

    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $filename = time() . '.' . $image->getClientOriginalExtension();
    //         Image::make($image)->resize(300, 300)->save(public_path('images/' . $filename));
    //         $post->image = $filename;
    //     }

    //     $post->save();

    //     return redirect()->route('posts.index');
    // }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}