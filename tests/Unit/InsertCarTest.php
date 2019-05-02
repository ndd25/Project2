<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $car = Car::all();
        $car->make = "Toyota";
        $car->model = "Camry";
        $car->year = 2001;
        $this->assertTrue($car->make = "Toyota");
    }


}
