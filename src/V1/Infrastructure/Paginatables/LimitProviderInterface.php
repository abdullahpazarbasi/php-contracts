<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface LimitProviderInterface
 */
interface LimitProviderInterface
{
    
    /**
     * @return int
     */
    public function getLimit();
    
}