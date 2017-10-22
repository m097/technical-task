<?php

namespace Module\Zoo\Animals;

use Core\Logger;

/**
 * Class AbstractAnimal
 * @package Module\Zoo\Animals
 */
abstract class AbstractAnimal
{
    /**
     * @return string
     */
    abstract public static function getName() : string ;

    /**
     * @return void
     */
    abstract public function behave() : void;

    /**
     * @param $food
     *
     * @return string
     */
    public function eat($food) : string
    {
        return static::getName() . ' eat ' . $food;
    }

    /**
     * @param $skill
     */
    public static function printSkill($skill) : void
    {
        echo $skill.PHP_EOL;
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return string
     */
    public function __call($name, $arguments)
    {
        Logger::getInstance()->log()->notice(static::class.'::'.$name.' does not exist');

        return 'I can\'t '.$name;
    }
}
