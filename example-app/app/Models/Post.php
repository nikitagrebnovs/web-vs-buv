<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function addLike($user, $post)
    {
        if ($user->status == User::USER_STATUS_REGISTRED) {
            $this->createLike($user, $post);
        }


    }

    public function createLike($user, $post)
    {
        $like = Like::factory()->create([
            'post_id' => $post->id,
            'user_id' => $user->id
        ]);

    }
}
