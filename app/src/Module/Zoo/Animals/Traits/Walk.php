<?php

namespace Module\Zoo\Animals\Traits;

use Module\Zoo\Behaviour\Walk\NoWalk;
use Module\Zoo\Behaviour\Walk\WalkBehaviour;

/**
 * Class Walk
 * @package Module\Zoo\Animals\Traits
 */
Trait Walk
{
    /**
     * @var WalkBehaviour
     */
    private $walkBehaviour;

    /**
     * @return WalkBehaviour
     */
    protected function getWalkBehaviour(): WalkBehaviour
    {
        return $this->walkBehaviour;
    }

    /**
     * @param WalkBehaviour $walkBehaviour
     */
    protected function setWalkBehaviour(WalkBehaviour $walkBehaviour) : void
    {
        $this->walkBehaviour = $walkBehaviour;
    }

    /**
     * @return string
     */
    public function walk() : string
    {
        if (!$this->getWalkBehaviour()) {
            $this->setWalkBehaviour(new NoWalk());
        }

        return $this->getWalkBehaviour()->walk();
    }
}
