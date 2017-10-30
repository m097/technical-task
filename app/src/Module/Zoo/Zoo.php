<?php

namespace Module\Zoo;

use Module\Module;
use Module\Zoo\Animals\AbstractAnimal;

/**
 * Class Zoo
 * @package Module\Zoo
 */
class Zoo extends Module
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
            try {
                $animal->behave();
                echo '------------------'.PHP_EOL;
            } catch (\Exception $exception) {
                $this->getLogger()->log()->error($exception->getMessage());
            }
        }
    }
}
