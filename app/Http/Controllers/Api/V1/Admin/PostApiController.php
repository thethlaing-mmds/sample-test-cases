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
        abort_if(Gate::denies('post_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return new PostResource(Post::all());
    }

    public function store(StorePostRequest $request)
    {
        abort_if(Gate::denies('post_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $post = Post::create($request->all());

        return (new PostResource($post))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show($id)
    {             
        abort_if(Gate::denies('post_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');         
        return (new PostResource(Post::findOrFail($id)))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        abort_if(Gate::denies('post_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');         
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
