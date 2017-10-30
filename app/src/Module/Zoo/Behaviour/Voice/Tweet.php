<?php

namespace Module\Zoo\Behaviour\Voice;

class Tweet implements VoiceBehaviour
{
    public function voice(): string
    {
        return 'tweet';
    }
}
