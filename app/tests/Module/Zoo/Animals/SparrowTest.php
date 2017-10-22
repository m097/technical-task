<?php

namespace Tests\Module\Zoo\Animals;

use Module\Zoo\Animals\Sparrow;
use Tests\BaseTestCase;

class SparrowTest extends BaseTestCase
{
    public function testCat()
    {
        $animal = new Sparrow();
        $this->assertEquals('sparrow', $animal::getName());
        $this->assertEquals('sparrow fly', $animal->fly());
        $this->assertEquals('sparrow tweet', $animal->tweet());
        $this->assertEquals('sparrow eat food', $animal->eat('food'));
    }
}
