<?php

namespace Tests\Unit;

use App\Country;
use App\Image;
use App\Post;
use App\Supplier;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;
// use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
  use RefreshDatabase, WithFaker;

  public function setUp() :void
  {
    parent::setUp();

    $this->country = factory(Country::class)->create();
    $this->supplier = factory(Supplier::class)->create();
    $this->user = factory(User::class)->create();
    $this->post = factory(Post::class)->create();
    $this->image = factory(Image::class)->create([
      "imageable_id" => $this->user->id,
      "imageable_type" => "App\User",
    ]);
  } 

  /** @test  */
  public function users_database_has_expected_columns()
  {
      $this->assertTrue( 
        Schema::hasColumns('users', [
          'id','name', 'email', 'email_verified_at', 'password'
      ]), 1);
  }

  /** @test */
  public function a_user_has_a_phone()  {
      $user = factory(User::class)->create(); 
      $phone = factory(Phone::class)->create(['user_id' => $user->id]); 
      // Method 1:
      $this->assertInstanceOf(Phone::class, $user->phone); 
      // Method 2:
      $this->assertEquals(1, $user->phone->count()); 
  }

  /** @test  */
  public function a_user_belongs_to_many_roles() {
      $user = factory(User::class)->create(); 
      $role = factory(Role::class)->create();
      $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $user->roles); 
  }

  public function a_user_morphs_one_image()
  {
      $this->assertInstanceOf(Image::class, $this->user->image); 
  }
}
