<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validatePost();
        post::create([
            'title' => request('title'),
            'body' => request('body'),
            'author' => request('author'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $comments = Comment::wherePost_id($post['id'])->get(); // للحصول على التعليقات الخاصة بالمقال المعروض فقط
        return view('posts.show', compact('post', 'comments'));

        // $comments = $post->comments()->where('approved', 1)->get();
        // return view('posts.show', compact(['post', 'comments']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view("posts.edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {
        $this->validatePost();
        $post->update([
            'title' => request('title'),
            'body' => request('body'),
            'author' => request('author')
        ]);
        return redirect('/posts/'.$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function validatePost(){
        request()->validate([
            'title' => ['required', 'unique:posts', 'max:100'],
            'body' => 'required',
            'author' => 'required',
        ]);
    }
}
