<?php

namespace App;

use Symfony\Component\Yaml\Yaml;

class CountryConfig
{
    private $config = [];

    public function __construct()
    {
        $this->config = $this->getConfig();
    }

    public function get($name, $default = null)
    {
        if (isset($this->config[$name])) {
            return $this->config[$name];
        }

        return $default;
    }

    public function getConfig()
    {
        return Yaml::parseFile(__DIR__ . '/../data/ua.yaml');
    }
}
