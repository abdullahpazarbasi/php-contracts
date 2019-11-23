<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface ModificationTimeDonorInterface
 */
interface ModificationTimeDonorInterface
{

    /**
     * @return DateTime|null
     */
    public function getModifiedAt();

}