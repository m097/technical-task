<?php

namespace Module\Zoo;

use Module\Zoo\Animals\Cat;
use Module\Zoo\Animals\Dog;
use Module\Zoo\Animals\Rat;
use Module\Zoo\Animals\Sparrow;

/**
 * Class AnimalsFactory
 * @package Module\Zoo
 */
class AnimalsFactory
{
    /**
     * @return array
     */
    public static function getAnimals() : array
    {
        return [
            new Cat(),
            new Dog(),
            new Rat(),
            new Sparrow(),
        ];
    }
}
