<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface CreationTimeUpperLimitDoneeInterface
 */
interface CreationTimeUpperLimitDoneeInterface
{
    
    /**
     * @param DateTime|null $createdTo
     * @return static
     */
    public function setCreatedTo($createdTo);
    
}