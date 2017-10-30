<?php

namespace Module\Zoo\Behaviour\Voice;

class NoVoice implements VoiceBehaviour
{
    public function voice(): string
    {
        return 'no voice';
    }
}
