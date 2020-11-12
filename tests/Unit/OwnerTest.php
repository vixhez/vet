<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Owner;


class OwnerTest extends TestCase
{
    use RefreshDatabase;
    public function testSameEmail()
    {
        $testOwner = new Owner([
            "first_name" => "Ralph",
            "last_name" => "Smith",
            "telephone" => "07856832154",
            "email" => "kites@live.co.uk",
        ]);
        $testOwner->save();

        $this->assertTrue(Owner::emailExists("kites@live.co.uk"));

        $this->assertFalse(Owner::emailExists("kites@livthdfhdhde.co.uk"));
    }
} 
