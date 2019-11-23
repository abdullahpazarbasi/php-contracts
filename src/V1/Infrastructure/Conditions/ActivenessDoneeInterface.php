<?php

namespace Contracts\V1\Infrastructure\Conditions;

/**
 * Interface ActivenessDoneeInterface
 */
interface ActivenessDoneeInterface
{

    /**
     * @param bool|null $active
     * @return static
     */
    public function setActive($active);

}