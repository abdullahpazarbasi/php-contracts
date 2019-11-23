<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface ExpirationTimeUpperLimitDonorInterface
 */
interface ExpirationTimeUpperLimitDonorInterface
{

    /**
     * @return DateTime|null
     */
    public function getExpiredTo();

}