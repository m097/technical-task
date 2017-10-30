<?php

namespace Module\Zoo\Actions;

use Module\Zoo\Animals\AbstractAnimal;

class ActionsBag
{
    private $actions = [];

    /**
     * @var AbstractAnimal
     */
    private $animal;

    public function __construct(AbstractAnimal $animal)
    {
        $this->animal = $animal;
    }

    /**
     * @return Action[]
     */
    public function getActions() : array
    {
        return $this->actions;
    }

    /**
     * @param string $method
     * @param array $parameters
     *
     * @throws \InvalidArgumentException
     * @return self
     */
    public function addAction(string $method, array $parameters) : self
    {
        if (method_exists($this->animal, $method) && is_callable([$this->animal, $method])) {
            $this->actions[] = new Action($this->animal, $method, $parameters);
        } else {
            throw new \InvalidArgumentException(sprintf('Unable to set action %s for class %s', $method, $this->animal->getType()));
        }

        return $this;
    }

    /**
     * @param int $index
     *
     * @return self
     */
    public function removeAction(int $index) : self
    {
        if ($this->hasAction($index)) {
            unset($this->actions[$index]);
        }

        return $this;
    }


    public function hasAction($key)
    {
        return array_key_exists($key, $this->actions);
    }
}
