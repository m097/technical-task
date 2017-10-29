<?php

namespace Core\Util;

use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;
use Monolog\Logger as MonologLogger;

/**
 * Class Logger
 * @package Module\Logger
 */
class Logger {

    /**
     * @var LoggerInterface $logger
     */
    private $logger;

    /**
     * Logger constructor.
     *
     * @param $appRoot
     */
    public function __construct($appRoot)
    {
        $this->logger = new MonologLogger('app');
        $logFile = $appRoot.'/var/logs/app.log';
        $this->logger->pushHandler(new StreamHandler($logFile, MonologLogger::DEBUG));
    }

    public function log()
    {
        return $this->logger;
    }

}
