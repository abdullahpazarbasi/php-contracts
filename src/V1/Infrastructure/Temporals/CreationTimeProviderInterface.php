<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface CreationTimeProviderInterface
 */
interface CreationTimeProviderInterface
{

    /**
     * @return DateTime
     */
    public function getCreatedAt();

}