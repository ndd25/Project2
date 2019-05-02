<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;

class ModelCheckTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $car = Car::InRandomOrder()->first();
        $this->assertInternalType('string',$car->model);
    }


}
