<?php

namespace Tests\Module\Zoo\Animals;

use Module\Zoo\Animals\Dog;
use Tests\BaseTestCase;

class DogTest extends BaseTestCase
{
    public function testDog()
    {
        $animal = new Dog();
        $this->assertEquals('dog', $animal::getName());
        $this->assertEquals('dog walking', $animal->walk());
        $this->assertEquals('dog run', $animal->run());
        $this->assertEquals('dog wuf', $animal->wuf());
        $this->assertEquals('dog has bitten man', $animal->byte('man'));
        $this->assertEquals('dog eat food', $animal->eat('food'));
    }
}
