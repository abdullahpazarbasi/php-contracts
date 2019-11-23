<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface ExpirationTimeDoneeInterface
 */
interface ExpirationTimeDoneeInterface
{

    /**
     * @param DateTime|null $expiredAt
     * @return static
     */
    public function setExpiredAt(DateTime $expiredAt);

}