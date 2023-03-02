<?php

namespace Tests\Feature;

use App\Models\FavoriteList;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use SebastianBergmann\Type\VoidType;
use Tests\TestCase;

class FetchFavoritesTest extends TestCase
{
    use DatabaseTransactions;

    public function test_fetch(): void
    {
        $testFavoriteList =  new FavoriteList;
        $testFavoriteList->user_id = 1;
        $testFavoriteList->title = "my first list";
        $testFavoriteList->save();

        $response = $this->getJson(route('favorites.index',['user_id' => 1]));

        $response->assertStatus(200);
        $response->json();
        $this->assertEquals("my first list",$response[0]['title']);

    }
    public function test_add_new_list(): void
    {
        $data = array('title'=>"my second list",
        'user_id'=>2,
        'name'=>['cool item','lame item']

            );

    $response = $this->post('/api/favorites',['data' => json_encode($data)]);
    $response->assertStatus(200);
    $response->json();

    $this->assertEquals("my second list",$response[0]['title']);
    }
}
