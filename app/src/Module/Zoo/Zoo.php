<?php

namespace Module\Zoo;

use Module\Zoo\Animals\AbstractAnimal;

/**
 * Class Zoo
 * @package Module\Zoo
 */
class Zoo
{
    /**
     * @var AbstractAnimal[]
     */
    private $animals = [];

    /**
     * @param AbstractAnimal $animal
     */
    public function addAnimal(AbstractAnimal $animal) : void
    {
        $this->animals[] = $animal;
    }

    /**
     * @param array $animals
     */
    public function addAnimals (array $animals = []) : void
    {
        foreach ($animals as $animal) {
            $this->addAnimal($animal);
        }
    }

    /**
     * Show animalSkills
     */
    public function showAnimalSkills() : void
    {
        foreach ($this->animals as $animal) {
            $animal->behave();
            AbstractAnimal::printSkill($animal->eat('food'));
            echo '------------------'.PHP_EOL;
        }
    }
}
