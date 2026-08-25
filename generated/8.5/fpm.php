<?php

namespace Safe;

use Safe\Exceptions\FpmException;

/**
 *
 *
 * @throws FpmException
 *
 */
function fastcgi_finish_request(): void
{
    error_clear_last();
    $safeResult = \fastcgi_finish_request();
    if ($safeResult === false) {
        throw FpmException::createFromPhpError();
    }
}


/**
 *
 *
 * @return int
 * @throws FpmException
 *
 */
function fpm_get_status(): int
{
    error_clear_last();
    $safeResult = \fpm_get_status();
    if ($safeResult === false) {
        throw FpmException::createFromPhpError();
    }
    return $safeResult;
}
