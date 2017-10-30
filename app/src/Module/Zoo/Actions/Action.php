<?php

namespace Module\Zoo\Actions;

use Module\Zoo\Animals\AbstractAnimal;

class Action
{
    /**
     * @var object
     */
    private $class;

    /**
     * @var string
     */
    private $method;

    /**
     * @var array
     */
    private $parameters;

    /**
     * Action constructor.
     *
     * @param AbstractAnimal $class
     * @param string $method
     * @param array $parameters
     */
    public function __construct(AbstractAnimal $class, string $method, array $parameters)
    {
        $this->class = $class;
        $this->method = $method;
        $this->parameters = $parameters;
    }

    /**
     * @return string
     */
    public function run() : string
    {
        return call_user_func_array([$this->class, $this->method], $this->parameters);
    }

}
