<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface PageNumberProviderInterface
 */
interface PageNumberProviderInterface
{
    
    /**
     * @return int
     */
    public function getPageNumber();
    
}