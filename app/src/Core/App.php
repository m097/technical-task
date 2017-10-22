<?php
namespace Core;

use Module\Zoo\AnimalsFactory;
use Module\Zoo\Zoo;

/**
 * Class App
 * @package Core
 */
class App
{
    /**
     * Run application
     */
    public function run() : void
    {
        try{
            Logger::getInstance()->log()->debug('Start application');

            $animals = AnimalsFactory::getAnimals();
            $zoo = new Zoo();
            $zoo->addAnimals($animals);
            $zoo->showAnimalSkills();

            Logger::getInstance()->log()->debug('End execution');
        } catch (\Exception $exception) {
            echo 'Application error'.PHP_EOL;
            Logger::getInstance()->log()->error($exception->getMessage());
        }
    }


}
