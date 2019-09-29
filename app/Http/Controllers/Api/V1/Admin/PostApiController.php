<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\Admin\PostResource;
use App\Post;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostApiController extends Controller
{
    public function index()
    {
        return new PostResource(Post::all());
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->all());

        return (new PostResource($post))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show($id)
    {                      
        return (new PostResource(Post::findOrFail($id)))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->all());

        return (new PostResource($post))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
