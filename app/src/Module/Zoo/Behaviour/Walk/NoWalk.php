<?php

namespace Module\Zoo\Behaviour\Walk;

class NoWalk implements WalkBehaviour
{
    public function walk(): string
    {
        return 'do not walk';
    }

}
