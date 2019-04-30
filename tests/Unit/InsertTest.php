<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = User::find(2);
        $user->name = "Steve Smith";
        $this->assertTrue($user->name = "Steve Smith");
    }


}
