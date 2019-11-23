<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface LimitDonorInterface
 */
interface LimitDonorInterface
{

    /**
     * @return int|null
     */
    public function getLimit();

}