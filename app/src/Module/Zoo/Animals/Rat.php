<?php

namespace Module\Zoo\Animals;

use Module\Zoo\Abilities\Interfaces\Eatable;

/**
 * Class Rat
 * @package Module\Zoo\Animals
 */
class Rat extends AbstractAnimal implements Eatable
{
    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'rat';
    }

    /**
     * @inheritdoc
     */
    public function behave() : void
    {
        self::printSkill($this->pi());
    }

    /**
     * @return string
     */
    public function pi() : string
    {
        return static::getName() . ' pi';
    }

}
