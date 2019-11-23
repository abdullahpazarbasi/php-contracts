<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface ModificationTimeDoneeInterface
 */
interface ModificationTimeDoneeInterface
{

    /**
     * @param DateTime|null $modifiedAt
     * @return static
     */
    public function setModifiedAt(DateTime $modifiedAt);

}