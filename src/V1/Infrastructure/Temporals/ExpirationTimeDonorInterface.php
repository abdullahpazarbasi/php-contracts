<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface ExpirationTimeDonorInterface
 */
interface ExpirationTimeDonorInterface
{

    /**
     * @return DateTime|null
     */
    public function getExpiredAt();

}