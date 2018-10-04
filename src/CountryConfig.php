<?php

namespace App;

use Symfony\Component\Yaml\Yaml;

final class CountryConfig
{
    private static $instance;

    private $config = [];

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
        $this->config = Yaml::parseFile(__DIR__ . '/../data/ua.yaml');
    }

    public function __toString()
    {
        return (string) \spl_object_id($this);
    }

    public function get($name, $default = null)
    {
        if (isset($this->config[$name])) {
            return $this->config[$name];
        }

        return $default;
    }

    private function __clone()
    {
    }

    private function __sleep()
    {
    }

    private function __wakeup()
    {
    }
}
