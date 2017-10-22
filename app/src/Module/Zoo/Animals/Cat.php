<?php

namespace Module\Zoo\Animals;

use Module\Zoo\Abilities\Interfaces\Eatable;
use Module\Zoo\Abilities\Interfaces\Walkable;
use Module\Zoo\Animals\Traits\Walk;

/**
 * Class Cat
 * @package Module\Zoo\Animals
 */
class Cat extends AbstractAnimal implements Walkable, Eatable
{
    use Walk;

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'cat';
    }

    /**
     * @inheritdoc
     */
    public function behave() : void
    {
        self::printSkill($this->walk());
        self::printSkill($this->meow());
    }

    /**
     * @return string
     */
    public function meow() : string
    {
        return static::getName() . ' meow';
    }

}
