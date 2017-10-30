<?php

namespace Module\Zoo;

use Module\Zoo\Animals\Birds\Sparrow;
use Module\Zoo\Animals\Mammals\Predatory\Cat;
use Module\Zoo\Animals\Mammals\Predatory\Dog;
use Module\Zoo\Animals\Mammals\Rodents\Rat;

/**
 * Class AnimalsFactory
 * @package Module\Zoo
 */
class AnimalsFactory
{
    /**
     * @return array
     */
    public function getAnimals() : array
    {
        return [
            new Cat(),
            new Dog(),
            new Rat(),
            new Sparrow(),
        ];
    }
}
