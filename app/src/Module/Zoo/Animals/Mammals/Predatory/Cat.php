<?php

namespace Module\Zoo\Animals\Mammals\Predatory;

use Module\Zoo\Animals\Mammals\AbstractMammal;
use Module\Zoo\Behaviour\Voice\Meow;
use Module\Zoo\Behaviour\Walk\WalkOnFourPaws;

/**
 * Class Cat
 * @package Module\Zoo\Animals
 */
class Cat extends AbstractMammal
{
    public function __construct()
    {
        $this->setType('cat');
        $this->setWalkBehaviour(new WalkOnFourPaws());
        $this->setVoiceBehaviour(new Meow());

        $this->actions = [
            'walk' => [],
            'voice' => []
        ];
    }

}
