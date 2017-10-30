<?php

namespace Module\Zoo\Animals\Birds;

use Module\Zoo\Behaviour\Fly\FlyWithWings;
use Module\Zoo\Behaviour\Voice\Tweet;
use Module\Zoo\Behaviour\Walk\WalkOnTwoPaws;

/**
 * Class Sparrow
 * @package Module\Zoo\Animals\Birds
 */
class Sparrow extends AbstractBird
{
    public function __construct()
    {
        $this->setType('sparrow');
        $this->setWalkBehaviour(new WalkOnTwoPaws());
        $this->setFlyBehaviour(new FlyWithWings());
        $this->setVoiceBehaviour(new Tweet());

        $this->actions = [
            'walk' => [],
            'voice' => [],
            'fly' => [],
        ];
    }
}
