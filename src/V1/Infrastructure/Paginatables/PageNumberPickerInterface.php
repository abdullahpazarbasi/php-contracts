<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface PageNumberPickerInterface
 */
interface PageNumberPickerInterface
{

    /**
     * @param int $pageNumber
     * @return static
     */
    public function setPageNumber($pageNumber);

}