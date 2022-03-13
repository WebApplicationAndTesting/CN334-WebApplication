<?php

namespace Tests\Unit;

use App\Phone;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

// use PHPUnit\Framework\TestCase;

class PhoneTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function a_phone_belongs_to_a_user()
    {
        $user = factory(User::class)->create();
        $phone = factory(Phone::class)->create(['user_id' => $user->id]); 

        $this->assertInstanceOf(User::class, $phone->user);
    }
}
