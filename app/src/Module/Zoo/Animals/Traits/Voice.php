<?php

namespace Module\Zoo\Animals\Traits;

use Module\Zoo\Behaviour\Voice\NoVoice;
use Module\Zoo\Behaviour\Voice\VoiceBehaviour;

trait Voice
{
    /**
     * @var VoiceBehaviour
     */
    private $voiceBehaviour;

    /**
     * @return mixed
     */
    public function getVoiceBehaviour() : VoiceBehaviour
    {
        return $this->voiceBehaviour;
    }

    /**
     * @param VoiceBehaviour $voiceBehaviour
     */
    public function setVoiceBehaviour(VoiceBehaviour $voiceBehaviour) : void
    {
        $this->voiceBehaviour = $voiceBehaviour;
    }

    public function voice() : string
    {
        if (!$this->getVoiceBehaviour()) {
            $this->setVoiceBehaviour(new NoVoice());
        }

        return $this->getVoiceBehaviour()->voice();
    }
}
