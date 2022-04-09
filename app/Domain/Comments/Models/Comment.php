<?php

namespace App\Domain\Comments\Models;

use App\Domain\Comments\Tests\Factories\CommentFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $author
 * @property string $author_id
 * @property string $text
 * @property string $post_code
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Comment extends Model
{
    public static function factory(): CommentFactory
    {
        return CommentFactory::new();
    }
}
