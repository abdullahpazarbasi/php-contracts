<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface PageSizeProviderInterface
 */
interface PageSizeProviderInterface
{
    
    /**
     * @return int
     */
    public function getPageSize();
    
}