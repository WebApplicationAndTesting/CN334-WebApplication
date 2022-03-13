<?php

namespace Tests\Unit;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class PhonesTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function a_phone_belongs_to_a_user()
    {
        // $user = factory(User::class)->create();
        // $phone = factory(Phone::class)->create(['user_id' => $user->id]); 
        $user = User::factory()->create();
        $phone = Phone::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(User::class, $phone->user);
    }
}