<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface CreationTimeLowerLimitDoneeInterface
 */
interface CreationTimeLowerLimitDoneeInterface
{
    
    /**
     * @param DateTime|null $createdFrom
     * @return static
     */
    public function setCreatedFrom($createdFrom);
    
}