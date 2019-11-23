<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface ModificationTimeUpperLimitDoneeInterface
 */
interface ModificationTimeUpperLimitDoneeInterface
{
    
    /**
     * @param DateTime|null $modifiedTo
     * @return static
     */
    public function setModifiedTo($modifiedTo);
    
}