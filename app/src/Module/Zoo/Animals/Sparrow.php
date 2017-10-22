<?php

namespace Module\Zoo\Animals;

use Module\Zoo\Abilities\Interfaces\Eatable;
use Module\Zoo\Abilities\Interfaces\Flyable;
use Module\Zoo\Abilities\Interfaces\Walkable;
use Module\Zoo\Animals\Traits\Walk;

/**
 * Class Sparrow
 * @package Module\Zoo\Animals
 */
class Sparrow extends AbstractAnimal implements Walkable, Flyable, Eatable
{
    use Walk;

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'sparrow';
    }

    /**
     * @inheritdoc
     */
    public function behave() : void
    {
        self::printSkill($this->walk());
        self::printSkill($this->tweet());
        self::printSkill($this->fly());
    }

    /**
     * @return string
     */
    public function tweet() :string
    {
        return static::getName() . ' tweet';
    }

    /**
     * @return string
     */
    public function fly() : string
    {
        return static::getName() . ' fly';
    }

}
