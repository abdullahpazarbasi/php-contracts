<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface OffsetProviderInterface
 */
interface OffsetProviderInterface
{
    
    /**
     * @return int
     */
    public function getOffset();
    
}