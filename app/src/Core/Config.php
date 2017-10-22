<?php

namespace Core;

/**
 * Class Config
 * @package Core
 */
class Config
{
    /**
     * @var array
     */
    private $config;

    /**
     * @var self
     */
    private static $_instance;

    /**
     * Config constructor.
     */
    private function __construct()
    {
        $this->config = require __DIR__.'/../../config/config.php';
    }

    /**
     * @return self
     */
    public static function getInstance() :Config
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function get(string $key)
    {
        if(array_key_exists($key, $this->config)) {
            return $this->config[$key];
        }

        return null;
    }
}
