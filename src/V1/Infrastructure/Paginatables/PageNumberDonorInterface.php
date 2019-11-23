<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface PageNumberDonorInterface
 */
interface PageNumberDonorInterface
{

    /**
     * @return int|null
     */
    public function getPageNumber();

}