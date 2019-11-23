<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface CreationTimeUpperLimitDonorInterface
 */
interface CreationTimeUpperLimitDonorInterface
{

    /**
     * @return DateTime|null
     */
    public function getCreatedTo();

}