<?php

namespace App\Logger;

class FileLogger implements LoggerInterface
{
    public function log($message)
    {
        \file_put_contents(
            __DIR__ . '/../../var/log/app.log',
            $message,
            \FILE_APPEND
        );
    }
}
