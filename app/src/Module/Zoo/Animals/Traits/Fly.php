<?php

namespace Module\Zoo\Animals\Traits;

use Module\Zoo\Behaviour\Fly\FlyBehaviour;
use Module\Zoo\Behaviour\Fly\NoFly;

/**
 * Class Fly
 * @package Module\Zoo\Animals\Traits
 */
trait Fly
{
    /**
     * @var FlyBehaviour
     */
    private $flyBehaviour;

    /**
     * @return FlyBehaviour
     */
    protected function getFlyBehaviour(): FlyBehaviour
    {
        return $this->flyBehaviour;
    }

    /**
     * @param FlyBehaviour $flyBehaviour
     */
    protected function setFlyBehaviour(FlyBehaviour $flyBehaviour) : void
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    /**
     * @return string
     */
    public function fly() : string
    {
        if (!$this->getFlyBehaviour()) {
            $this->setFlyBehaviour(new NoFly());
        }

        return $this->getFlyBehaviour()->fly();
    }
}
