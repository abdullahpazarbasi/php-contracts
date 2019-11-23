<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface PageSizePickerInterface
 */
interface PageSizePickerInterface
{

    /**
     * @param int $pageSize
     * @return static
     */
    public function setPageSize($pageSize);

}