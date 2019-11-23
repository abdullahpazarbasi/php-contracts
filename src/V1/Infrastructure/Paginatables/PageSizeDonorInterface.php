<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface PageSizeDonorInterface
 */
interface PageSizeDonorInterface
{

    /**
     * @return int|null
     */
    public function getPageSize();

}