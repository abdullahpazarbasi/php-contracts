<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface ModificationTimeLowerLimitDonorInterface
 */
interface ModificationTimeLowerLimitDonorInterface
{
    
    /**
     * @return DateTime|null
     */
    public function getModifiedFrom();

}