<?php

return [
    \App\Logger\LoggerInterface::class => DI\create(\App\Logger\NullLogger::class),
];
