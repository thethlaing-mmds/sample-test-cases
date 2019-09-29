<?php

namespace Tests\Unit\API;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;


class PostAPITest extends TestCase
{
    use WithoutMiddleware, DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_read_post()
    {
        $post = factory(Post::class)->create();
        $admin = \App\User::find(1);
        $this->response = $this
            ->actingAs($admin)
            ->json(
                'GET',
                '/api/v1/posts/' . $post->id
            )->assertStatus(200);

        $response = json_decode($this->response->getContent(), true);
        $responseData = $response['data'];
        
        $this->assertDatabaseHas('posts', $responseData);
        
    }

    public function test_read_all_posts()
    {
        $admin = \App\User::find(1);

        $this->response = $this
            ->actingAs($admin)
            ->json(
                'GET',
                '/api/v1/posts/'
            )->assertStatus(200);

        $response = json_decode($this->response->getContent(), true);
        $posts =  \App\Post::all();
        $this->assertEquals($response['data'], $posts->toArray());
    }

    public function test_create_post()
    {
        $post = factory(Post::class)->make()->toArray();
        $admin = \App\User::find(1);
        $this->response = $this
            ->actingAs($admin)
            ->json(
                'POST',
                '/api/v1/posts',
                $post
            )->assertStatus(201);


        $response = json_decode($this->response->getContent(), true);
        $responseData = $response['data'];
        unset($responseData['id']);
        unset($responseData['created_at']);
        unset($responseData['updated_at']);
        unset($responseData['deleted_at']);

        $this->assertEquals($responseData, $post);

        $this->assertDatabaseHas('posts', $post);
    }
}
