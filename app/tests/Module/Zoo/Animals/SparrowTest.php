<?php

namespace Tests\Module\Zoo\Animals;

use Module\Zoo\Animals\Birds\Sparrow;
use Tests\BaseTestCase;

class SparrowTest extends BaseTestCase
{
    public function testCat()
    {
        $animal = new Sparrow();
        $this->assertEquals('sparrow', $animal->getType());
        $this->assertEquals('fly with wings', $animal->fly());
        $this->assertEquals('tweet', $animal->voice());
        $this->assertEquals('eat food', $animal->eat('food'));
    }
}
