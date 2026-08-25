<?php

namespace Safe;

use Safe\Exceptions\GmpException;

/**
 *
 *
 * @param \GMP|int|string $seed The seed to be set for the gmp_random,
 * gmp_random_bits, and
 * gmp_random_range functions.
 *
 */
function gmp_random_seed($seed): void
{
    error_clear_last();
    $safeResult = \gmp_random_seed($seed);
}
