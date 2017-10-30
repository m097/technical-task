<?php

namespace Module\Zoo\Behaviour\Walk;

class Run implements WalkBehaviour
{
    public function walk(): string
    {
        return 'run';
    }

}
