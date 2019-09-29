<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Resources\Admin\CommentResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CommentApiController extends Controller
{
    public function index()
    {
        return new CommentResource(Comment::with(['post'])->get());
    }

    public function store(StoreCommentRequest $request)
    {
        $comment = Comment::create($request->all());

        return (new CommentResource($comment))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Comment $comment)
    {
        return new CommentResource($comment->load(['post']));
    }

    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $comment->update($request->all());

        return (new CommentResource($comment))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
