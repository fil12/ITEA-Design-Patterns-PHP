<?php

namespace App\Security;

final class AuthProtocolFactory
{
    public static function factory($version)
    {
        switch ($version) {
            case AuthProtocolV1::VERSION:
                return new AuthProtocolV1();
            case AuthProtocolV2::VERSION:
                return new AuthProtocolV2();
        }

        throw new \RuntimeException(\sprintf('Unknown auth protocol version %s', $version));
    }
}
