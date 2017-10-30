<?php

namespace Module\Zoo\Animals\Mammals\Predatory;

use Module\Zoo\Animals\Mammals\AbstractMammal;
use Module\Zoo\Behaviour\Voice\Wuf;
use Module\Zoo\Behaviour\Walk\Run;
use Module\Zoo\Behaviour\Walk\WalkOnFourPaws;

/**
 * Class Dog
 * @package Module\Zoo\Animals
 */
class Dog extends AbstractMammal
{
    const MOVE_BEHAVIOUR_WALK = 'walk';

    const MOVE_BEHAVIOUR_RUN = 'run';

    /**
     * @var array
     */
    private $moveBehaviours;

    public function __construct()
    {
        parent::__construct();
        $this->setType('dog');
        $this->setVoiceBehaviour(new Wuf());

        $this->moveBehaviours = [
            self::MOVE_BEHAVIOUR_WALK => new WalkOnFourPaws(),
            self::MOVE_BEHAVIOUR_RUN => new Run(),
        ];

        $this->actions()
             ->addAction('walk' , [])
             ->addAction('run' , [])
             ->addAction('voice' , [])
             ->addAction('byte' , ['man'])
        ;
    }

    /**
     * @return string
     */
    public function walk() : string
    {
        $this->setMoveBehaviour(self::MOVE_BEHAVIOUR_WALK);

        return $this->getWalkBehaviour()->walk();
    }

    /**
     * @return string
     */
    public function run() : string
    {
        $this->setMoveBehaviour(self::MOVE_BEHAVIOUR_RUN);

        return $this->getWalkBehaviour()->walk();
    }

    /**
     * @param $object
     *
     * @return string
     */
    public function byte($object) : string
    {
        return 'has bitten ' . $object;
    }

    /**
     * @param string $key
     */
    private function setMoveBehaviour(string $key)
    {
        if (array_key_exists($key, $this->moveBehaviours)) {
            $this->setWalkBehaviour($this->moveBehaviours[$key]);
        } else {
            $this->setWalkBehaviour($this->moveBehaviours[self::MOVE_BEHAVIOUR_WALK]);
        }
    }
}
