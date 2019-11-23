<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface CreationTimeLowerLimitDonorInterface
 */
interface CreationTimeLowerLimitDonorInterface
{
    
    /**
     * @return DateTime|null
     */
    public function getCreatedFrom();

}