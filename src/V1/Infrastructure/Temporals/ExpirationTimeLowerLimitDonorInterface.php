<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface ExpirationTimeLowerLimitDonorInterface
 */
interface ExpirationTimeLowerLimitDonorInterface
{
    
    /**
     * @return DateTime|null
     */
    public function getExpiredFrom();

}