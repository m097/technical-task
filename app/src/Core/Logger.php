<?php

namespace Core;

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
     * @var self
     */
    private static $_instance;

    /**
     * Logger constructor.
     */
    private function __construct()
    {
        $this->logger = new MonologLogger('app');
        $logFile = Config::getInstance()->get('app_root').'/var/logs/app.log';
        $this->logger->pushHandler(new StreamHandler($logFile, MonologLogger::DEBUG));
    }

    /**
     * @return Logger
     */
    public static function getInstance() : Logger
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function log()
    {
        return $this->logger;
    }

}
