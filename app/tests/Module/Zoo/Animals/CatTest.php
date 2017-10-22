<?php

namespace Tests\Module\Zoo\Animals;

use Module\Zoo\Animals\Cat;
use Tests\BaseTestCase;

class CatTest extends BaseTestCase
{
    public function testCat()
    {
        $animal = new Cat();
        $this->assertEquals('cat', $animal::getName());
        $this->assertEquals('cat walking', $animal->walk());
        $this->assertEquals('cat meow', $animal->meow());
        $this->assertEquals('cat eat food', $animal->eat('food'));
    }
}
