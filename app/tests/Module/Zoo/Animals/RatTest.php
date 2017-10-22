<?php

namespace Tests\Module\Zoo\Animals;

use Module\Zoo\Animals\Rat;
use Tests\BaseTestCase;

class RatTest extends BaseTestCase
{
    public function testCat()
    {
        $animal = new Rat();
        $this->assertEquals('rat', $animal::getName());
        $this->assertEquals('rat pi', $animal->pi());
        $this->assertEquals('rat eat food', $animal->eat('food'));
    }
}
