<?php

namespace Contracts\V1\Infrastructure\Conditions;

/**
 * Interface ActivenessDonorInterface
 */
interface ActivenessDonorInterface
{

    /**
     * @return bool|null
     */
    public function isActive();

}