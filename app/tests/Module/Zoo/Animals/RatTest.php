<?php

namespace Tests\Module\Zoo\Animals;

use Module\Zoo\Animals\Mammals\Rodents\Rat;
use Tests\BaseTestCase;

class RatTest extends BaseTestCase
{
    public function testCat()
    {
        $animal = new Rat();
        $this->assertEquals('rat', $animal->getType());
        $this->assertEquals('pi', $animal->voice());
        $this->assertEquals('eat food', $animal->eat('food'));
    }
}
