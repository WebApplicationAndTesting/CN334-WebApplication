<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use App\History;
use App\Supplier;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class SuppliersTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test  */
    public function suppliers_database_has_expected_columns()
    {
        $this->assertTrue( 
          Schema::hasColumns('suppliers', [
            'id', 'name', 'services'
        ]), 1);
    }

    /** @test */
    public function a_supplier_has_an_history_through_user()
    {
        $supplier = factory(Supplier::class)->create();
        $user = factory(User::class)->create();
        $history = factory(History::class)->create(['user_id' => $user->id]);
        // Method 1:
        $this->assertInstanceOf(History::class, $supplier->userHistory); 
        // Method 2:
        $this->assertEquals(1, $supplier->userHistory->count());
    }
}
