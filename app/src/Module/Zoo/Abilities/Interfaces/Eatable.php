<?php

namespace Module\Zoo\Abilities\Interfaces;

/**
 * Interface Eatable
 * @package Module\Zoo\Abilities\Interfaces
 */
interface Eatable
{
    /**
     * @param $food
     * @return string
     */
    public function eat($food): string ;
}
