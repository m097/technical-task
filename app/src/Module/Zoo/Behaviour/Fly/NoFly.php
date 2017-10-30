<?php

namespace Module\Zoo\Behaviour\Fly;

class NoFly implements FlyBehaviour
{
    public function fly(): string
    {
        return 'do not fly';
    }
}
