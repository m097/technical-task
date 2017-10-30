<?php

namespace Module\Zoo\Behaviour\Voice;

class Pi implements VoiceBehaviour
{
    public function voice(): string
    {
        return 'pi';
    }
}
