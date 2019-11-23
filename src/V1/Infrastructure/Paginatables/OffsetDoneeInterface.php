<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface OffsetDoneeInterface
 */
interface OffsetDoneeInterface
{

    /**
     * @param int|null $offset
     * @return static
     */
    public function setOffset($offset);

}