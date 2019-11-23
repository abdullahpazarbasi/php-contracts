<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface LimitDoneeInterface
 */
interface LimitDoneeInterface
{

    /**
     * @param int|null $limit
     * @return static
     */
    public function setLimit($limit);

}