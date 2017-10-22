<?php

namespace Module\Zoo\Animals;

use Module\Zoo\Abilities\Interfaces\Eatable;
use Module\Zoo\Abilities\Interfaces\Walkable;
use Module\Zoo\Animals\Traits\Walk;

/**
 * Class Dog
 * @package Module\Zoo\Animals
 */
class Dog extends AbstractAnimal implements Walkable, Eatable
{
    use Walk;

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'dog';
    }

    /**
     * @inheritdoc
     */
    public function behave() : void
    {
        self::printSkill($this->walk());
        self::printSkill($this->run());
        self::printSkill($this->wuf());
        self::printSkill($this->byte('man'));
    }

    /**
     * @return string
     */
    public function run() : string
    {
        return static::getName() . ' run';
    }

    /**
     * @return string
     */
    public function wuf() : string
    {
        return static::getName() . ' wuf';
    }

    /**
     * @param $object
     *
     * @return string
     */
    public function byte($object) : string
    {
        return static::getName() . ' has bitten ' . $object;
    }
}
