<?php

namespace Module\Zoo\Animals\Mammals\Rodents;

use Module\Zoo\Animals\Mammals\AbstractMammal;
use Module\Zoo\Behaviour\Voice\Pi;

/**
 * Class Rat
 * @package Module\Zoo\Animals
 */
class Rat extends AbstractMammal
{
    public function __construct()
    {
        parent::__construct();
        $this->setType('rat');
        $this->setVoiceBehaviour(new Pi());

        $this->actions()->addAction('voice' , []);
    }
}
