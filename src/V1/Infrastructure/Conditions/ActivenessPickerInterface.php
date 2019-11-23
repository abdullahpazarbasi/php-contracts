<?php

namespace Contracts\V1\Infrastructure\Conditions;

/**
 * Interface ActivenessPickerInterface
 */
interface ActivenessPickerInterface
{

    /**
     * @param bool $active
     * @return static
     */
    public function setActive($active);

}