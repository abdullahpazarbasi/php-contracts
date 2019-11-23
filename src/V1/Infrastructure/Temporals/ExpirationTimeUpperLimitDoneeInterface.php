<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface ExpirationTimeUpperLimitDoneeInterface
 */
interface ExpirationTimeUpperLimitDoneeInterface
{
    
    /**
     * @param DateTime|null $expiredTo
     * @return static
     */
    public function setExpiredTo($expiredTo);
    
}