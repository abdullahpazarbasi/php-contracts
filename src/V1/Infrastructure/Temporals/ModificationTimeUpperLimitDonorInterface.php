<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface ModificationTimeUpperLimitDonorInterface
 */
interface ModificationTimeUpperLimitDonorInterface
{

    /**
     * @return DateTime|null
     */
    public function getModifiedTo();

}