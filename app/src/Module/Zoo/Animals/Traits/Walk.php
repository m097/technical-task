<?php

namespace Module\Zoo\Animals\Traits;

/**
 * Class Walk
 * @package Module\Zoo\Animals\Traits
 */
Trait Walk
{
    /**
     * @return string
     */
    public function walk() : string
    {
        return $this->getName() . ' walking';
    }
}
