<?php

namespace Module\Zoo\Behaviour\Voice;

class Meow implements VoiceBehaviour
{
    public function voice(): string
    {
        return 'meow';
    }
}
