<?php

namespace Contracts\V1\Infrastructure\Temporals;

use DateTime;

/**
 * Interface CreationTimePickerInterface
 */
interface CreationTimePickerInterface
{

    /**
     * @param DateTime $createdAt
     * @return static
     */
    public function setCreatedAt(DateTime $createdAt);

}