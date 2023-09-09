<?php

namespace App\Http\Controllers;

use App\Models\Post;
use http\Env\Request;
use App\Traits\PostTrait;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{

    use PostTrait;

    public function index()
    {
        $posts = $this->getPosts();
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(StorePostRequest $request)
    {
        try {
            Post::create($request->all());
            return redirect()->back()->with('success', 'Data saved successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show(Post $post)
    {
        //
    }


    public function edit($id)
    {
        $post = Post::findorFail($id);
        return view('posts.edit', compact('post'));
    }


    public function update(StorePostRequest $request, $id)
    {

        try {
            $post = Post::findorFail($id);

            $post->update($request->all());

            return redirect()->back()->with('edit', 'Data Updated successfully');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function destroy($id)
    {
        try {

            Post::destroy($id);
            return redirect()->back()->with('delete', 'Data has been deleted successfully');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
