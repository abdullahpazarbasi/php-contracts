<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface PageNumberDoneeInterface
 */
interface PageNumberDoneeInterface
{

    /**
     * @param int|null $pageNumber
     * @return static
     */
    public function setPageNumber($pageNumber);

}