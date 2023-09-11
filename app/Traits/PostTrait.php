<?php

namespace App\Traits;

use App\Http\Resources\PostResource;
use App\Models\Post;

trait PostTrait
{
    /**
     * Display a listing of the resource.
     */
    public function getPosts()
    {
        return Post::get();
    }



    /**
     * Store a newly created resource in storage.
     */
    public function storeData($request)
    {
        return Post::create($request);
    }



    /**
     * show the specified resource in storage.
     */
    public function showPost($id)
    {
        $post = new PostResource(Post::findorFail($id));
        return $post;
    }


    /**
     * Update the specified resource in storage.
     */
    public function updatePost($request, $id)
    {
        $post = Post::findorFail($id);
        $data = $post->update($request->all());
        return $data;
    }



    /**
     * Remove the specified resource from storage.
     */
    public function deletePost($id)
    {
        return  Post::destroy($id);
    }
}
