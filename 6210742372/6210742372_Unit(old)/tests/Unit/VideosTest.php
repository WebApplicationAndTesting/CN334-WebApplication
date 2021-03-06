<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use App\Comment;
use App\Country;
use App\Post;
use App\Supplier;
use App\User;
use App\Video;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;

class VideosTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function setUp() :void
    {
        parent::setUp();

        $this->country = factory(Country::class)->create();
        $this->supplier = factory(Supplier::class)->create();
        $this->user = factory(User::class)->create();
        $this->post = factory(Post::class)->create(['user_id' => $this->user->id]);
        $this->video = factory(Video::class)->create(['user_id' => $this->user->id]);
        $this->comment = factory(Comment::class)->create([
          "commentable_id" => $this->video->id,
          "commentable_type" => "App\Video",
        ]);
    } 

    /** @test  */
    public function videos_database_has_expected_columns()
    {
        $this->assertTrue( 
          Schema::hasColumns('videos', [
            'id','user_id', 'title', 'description', 'size', 'length'
        ]), 1);
    }

    /** @test  */
    public function a_video_morphs_many_comments()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->video->comments); 
    }
}
