<?php

namespace Tests\Module\Zoo\Animals;

use Module\Zoo\Animals\Mammals\Predatory\Dog;
use Tests\BaseTestCase;

class DogTest extends BaseTestCase
{
    public function testDog()
    {
        $animal = new Dog();
        $this->assertEquals('dog', $animal->getType());
        $this->assertEquals('walk on 4 paws', $animal->walk());
        $this->assertEquals('run', $animal->run());
        $this->assertEquals('wuf', $animal->voice());
        $this->assertEquals('has bitten man', $animal->byte('man'));
        $this->assertEquals('eat food', $animal->eat('food'));
    }
}
