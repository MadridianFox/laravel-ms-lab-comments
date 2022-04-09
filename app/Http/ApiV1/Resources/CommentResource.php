<?php

namespace App\Http\ApiV1\Resources;

use App\Domain\Comments\Models\Comment;
use App\Http\ApiV1\Support\Resources\BaseJsonResource;

/**
 * @mixin Comment
 */
class CommentResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'author' => $this->author,
            'author_id' => $this->author_id,
            'text' => $this->text,
            'post_code' => $this->post_code,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
