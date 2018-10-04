<?php

namespace App;

use App\Logger\LoggerInterface;

class TextAnalizer
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function analize($text)
    {
        $this->logger->log($text);
    }
}
