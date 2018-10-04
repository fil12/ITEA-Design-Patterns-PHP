<?php

namespace App\Logger;

class StdLogger implements LoggerInterface
{
    public function log($message)
    {
        echo $message . \PHP_EOL;
    }
}
