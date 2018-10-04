<?php

return [
    \App\Logger\LoggerInterface::class => DI\create(\App\Logger\FileLogger::class),
];
