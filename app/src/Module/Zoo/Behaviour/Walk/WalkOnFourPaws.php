<?php

namespace Module\Zoo\Behaviour\Walk;

class WalkOnFourPaws implements WalkBehaviour
{
    public function walk(): string
    {
        return 'walk on 4 paws';
    }

}
