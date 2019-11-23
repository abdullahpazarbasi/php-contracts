<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface OffsetPickerInterface
 */
interface OffsetPickerInterface
{

    /**
     * @param int $offset
     * @return static
     */
    public function setOffset($offset);

}