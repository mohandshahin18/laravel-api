<?php

namespace App\Http\Controllers\Api;

use App\Traits\PostTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    use PostTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Auth::id());
        return [
            'status' => true,
            'message' => ' Done',
            'data' => $this->getPosts(),
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest  $request)
    {
        try {
            return [
                'status' => true,
                'message' => ' Done',
                'data' => $this->storeData($request->all()),
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => 'Reject',
                'data' => $e->getMessage(),
            ];
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            return [
                'status' => true,
                'message' => ' Done',
                'data' => $this->showPost($id),
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => 'Reject',
                'data' => $e->getMessage(),
            ];
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, string $id)
    {
        try {
            return [
                'status' => true,
                'message' => ' Done',
                'data' => $this->updatePost($request,$id),
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => 'Reject',
                'data' => $e->getMessage(),
            ];
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            return [
                'status' => true,
                'message' => ' Done',
                'data' => [],
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => 'Reject',
                'data' => $e->getMessage(),
            ];
        }
    }
}
