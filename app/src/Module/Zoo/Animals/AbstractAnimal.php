<?php

namespace Module\Zoo\Animals;

use Module\Zoo\Actions\ActionsBag;
use Module\Zoo\Animals\Traits\Fly;
use Module\Zoo\Animals\Traits\Voice;
use Module\Zoo\Animals\Traits\Walk;
use Module\Zoo\Exceptions\AnimalException;

/**
 * Class AbstractAnimal
 * @package Module\Zoo\Animals
 */
abstract class AbstractAnimal
{
    use Voice;
    use Walk;
    use Fly;

    /**
     * @var string
     */
    private $type;

    /**
     * @var ActionsBag
     */
    private $actions;

    public function __construct()
    {
        $this->actions = new ActionsBag($this);
    }

    /**
     * @return void
     */
    public function behave() : void
    {
        if (!$this->actions || !$this->actions instanceof ActionsBag) {
            $this->actions = new ActionsBag($this);
        }

        if (!$this->actions->hasAction('eat')) {
            $this->actions->addAction('eat', ['food']);
        }

        foreach ($this->actions->getActions() as $action) {
            try {
                $actionString = $action->run();
                $this->printSkill($this->showSkill($actionString));
            } catch (\Exception $e) {

            }
        }
    }

    /**
     * @return ActionsBag
     */
    public function actions() : ActionsBag
    {
        return $this->actions;
    }

    /**
     * @return string
     * @throws AnimalException
     */
    public function getType() : string
    {
        if (!$this->type) {
            throw new AnimalException('Animal should have type');
        }

        return $this->type;
    }

    /**
     * @param string $type
     */
    protected function setType(string $type) : void
    {
        $this->type = $type;
    }

    /**
     * @param string $food
     *
     * @return string
     */
    public function eat(string $food) : string
    {
        return 'eat ' . $food;
    }

    /**
     * @param $skill
     */
    public function printSkill($skill) : void
    {
        echo $skill . PHP_EOL;
    }

    /**
     * @param $skill
     *
     * @return string
     */
    public function showSkill($skill) : string
    {
         return implode(' ', [$this->getType(), $skill]);
    }

    /**
     * @param string $name
     * @param array $arguments
     *
     * @return string
     * @throws AnimalException
     */
    public function __call($name, $arguments)
    {
        throw new AnimalException('I can\'t '.$name);
    }
}
