<?php


namespace App;

class CountryConfigProxy extends CountryConfig
{
    private $config;

    public function getConfig()
    {
        if (null === $this->config) {
            $this->config = parent::getConfig();
        }

        return $this->config;
    }
}
