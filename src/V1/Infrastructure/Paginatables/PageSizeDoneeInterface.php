<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface PageSizeDoneeInterface
 */
interface PageSizeDoneeInterface
{

    /**
     * @param int|null $pageSize
     * @return static
     */
    public function setPageSize($pageSize);

}