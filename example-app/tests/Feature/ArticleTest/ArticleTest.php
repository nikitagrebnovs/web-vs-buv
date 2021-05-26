<?php

namespace Tests\Feature\ArticleTest;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    function test_FetchesTrandingArticles()
    {
        Article::factory(3)->create();
        Article::factory()->create(['reads' => 10]);
        Article::factory()->create(['reads' => 15]);

        $mostPopular = Article::factory()->create(['reads' => 20]);

        $articles = Article::trending();

        $this->assertEquals($mostPopular->id, $articles->first()->id);
        $this->assertCount(3, $articles);

    }
}
