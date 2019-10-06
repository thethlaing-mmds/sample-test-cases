<?php

namespace Tests\Unit\API;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;


class PostAPITest extends TestCase
{
    use WithoutMiddleware, DatabaseTransactions, ApiTestTrait;
    /**
     * A basic unit test example.
     *
     * @return void
     */



    public function test_read_post()
    {
        $post = factory(Post::class)->create();


        $this->response = $this
            ->actingAs($this->getAdminUser('post_access'), 'api')
            ->json(
                'GET',
                '/api/v1/posts/' . $post->id
            );

        $response = json_decode($this->response->getContent(), true);
        $responseData = $response['data'];

        $this->assertDatabaseHas('posts', $responseData);
    }

    public function test_read_all_posts()
    {

        $this->response = $this
            ->actingAs($this->getAdminUser('post_access'), 'api')
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

        $this->response = $this
            ->actingAs($this->getAdminUser('post_access'), 'api')
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
