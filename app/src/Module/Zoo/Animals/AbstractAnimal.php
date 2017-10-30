<?php

namespace Module\Zoo\Animals;

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

    protected $actions = [];

    /**
     * @return void
     */
    public function behave() : void
    {
        if (!array_key_exists('eat', $this->actions)) {
            $this->actions['eat'] = ['food'];
        }

        foreach ($this->actions as $method => $variables) {
            if (method_exists($this, $method) && is_callable([$this, $method])) {
                try {
                    $actionString = call_user_func_array([$this, $method], $variables);
                    $this->printSkill($this->showSkill($actionString));
                } catch (\Exception $e) {

                }
            }
        }
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
    public function setType(string $type) : void
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
