<?php

namespace App\Traits;

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
