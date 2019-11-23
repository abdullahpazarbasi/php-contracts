<?php

namespace Contracts\V1\Infrastructure\Conditions;

/**
 * Interface ActivenessProviderInterface
 */
interface ActivenessProviderInterface
{

    /**
     * @return bool
     */
    public function isActive();

}