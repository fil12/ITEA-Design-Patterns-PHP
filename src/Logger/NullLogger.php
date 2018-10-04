<?php

namespace App\Logger;

class NullLogger implements LoggerInterface
{
    public function log($message)
    {
    }
}
