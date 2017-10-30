<?php

namespace Module\Zoo\Behaviour\Fly;

class FlyWithWings implements FlyBehaviour
{
    public function fly(): string
    {
        return 'fly with wings';
    }
}
