<?php

namespace Tests\Feature;

use App\Models\Like;
use App\Models\Post;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LikeTest extends TestCase
{
    use RefreshDatabase;

    public function test_UserCanLikePost()
    {


        $post = Post::factory()->create();

        $userRegistred = User::factory()->create(['status' => User::USER_STATUS_REGISTRED]);

        $userNotRegistred = User::factory()->create(['status' => User::USER_STATUS_UNREGISTRED]);

        $post->addLike($userRegistred, $post);
        $post->addLike($userNotRegistred, $post);

//        $this->actingAs($userNotRegistred);

        $this->assertDatabaseHas('likes', [
            'user_id' => $userRegistred->id,
        ]);


    }





}
