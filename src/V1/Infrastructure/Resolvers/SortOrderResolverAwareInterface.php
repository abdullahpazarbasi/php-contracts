<?php

namespace Contracts\V1\Infrastructure\Resolvers;

/**
 * Interface SortOrderResolverAwareInterface
 */
interface SortOrderResolverAwareInterface
{

    /**
     * @param SortOrderResolverInterface $sortOrderResolver
     * @return static
     */
    public function setSortOrderResolver(SortOrderResolverInterface $sortOrderResolver);

}