<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface OffsetDonorInterface
 */
interface OffsetDonorInterface
{

    /**
     * @return int|null
     */
    public function getOffset();

}