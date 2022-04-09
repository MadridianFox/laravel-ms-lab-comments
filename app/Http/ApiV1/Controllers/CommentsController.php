<?php

namespace App\Http\ApiV1\Controllers;

use App\Domain\Comments\Models\Comment;
use App\Http\ApiV1\Resources\CommentResource;
use Illuminate\Contracts\Support\Responsable;

class CommentsController
{
    public function listByPost(string $code): Responsable
    {
        /** @var Comment $comments */
        $comments = Comment::query()
            ->where('post_code', $code)
            ->get();

        return CommentResource::collection($comments);
    }
}
