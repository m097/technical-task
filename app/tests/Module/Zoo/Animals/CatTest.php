<?php

namespace Tests\Module\Zoo\Animals;

use Module\Zoo\Animals\Mammals\Predatory\Cat;
use Tests\BaseTestCase;

class CatTest extends BaseTestCase
{
    public function testCat()
    {
        $animal = new Cat();
        $this->assertEquals('cat', $animal->getType());
        $this->assertEquals('walk on 4 paws', $animal->walk());
        $this->assertEquals('meow', $animal->voice());
        $this->assertEquals('eat food', $animal->eat('food'));
    }
}
