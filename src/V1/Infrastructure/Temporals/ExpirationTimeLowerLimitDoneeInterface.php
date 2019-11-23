<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface ExpirationTimeLowerLimitDoneeInterface
 */
interface ExpirationTimeLowerLimitDoneeInterface
{

    /**
     * @param DateTime|null $expiredFrom
     * @return static
     */
    public function setExpiredFrom($expiredFrom);

}