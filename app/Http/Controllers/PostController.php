<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user', 'tags')->get();
        return view('posts.index', compact('posts', $posts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('posts.createpost', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|integer',
            'title' => 'required|string',
            'description' => 'required|string',
            'tags.*' => 'required|string'
        ]);

        $post = new Post;
        $post->user_id = $request->input('user_id');
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        $post->tags()->attach($request->input('tags'));


        return redirect('/posts')->with('success', 'new post has been submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $post = Post::with('tags', 'user')->findOrFail($post->id);
        return view('posts.showpost', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $post = Post::findOrFail($post->id);
        $tags = $post->tags;

        foreach ($tags as $tag) {
            $tagId[] = $tag->id;
        }

        if(count($tags) === 0){
            $tagId = [];
        }
        $allTags = Tag::all();
        
        return view('posts.editpost', compact(['post', 'tagId', 'allTags']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'tags.*' => 'sometimes|nullable|required|string'
        ]);

        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->update();
        $post->tags()->sync($request->input('tags'));

        return redirect('/posts')->with('success', 'post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->tags()->detach();
        $post->delete();

        return redirect('/posts')->with('success', 'post has been deleted successfully!');

    }
}
