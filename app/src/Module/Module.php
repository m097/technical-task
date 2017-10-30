<?php

namespace Module;

use Core\Util\Logger;

class Module
{
    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @return Logger
     */
    public function getLogger(): Logger
    {
        return $this->logger;
    }

    /**
     * @param Logger $logger
     */
    public function setLogger(Logger $logger) : void
    {
        $this->logger = $logger;
    }
}
