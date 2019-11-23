<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface ModificationTimeLowerLimitDoneeInterface
 */
interface ModificationTimeLowerLimitDoneeInterface
{
    
    /**
     * @param DateTime|null $modifiedFrom
     * @return static
     */
    public function setModifiedFrom($modifiedFrom);
    
}