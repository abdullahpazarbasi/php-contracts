<?php

namespace Contracts\V1\Infrastructure\Resolvers;

use Contracts\V1\Infrastructure\Pairs\SortOrderPairCollectionInterface;
use Contracts\V1\Infrastructure\Pairs\SortOrderPairInterface;

/**
 * Interface SortOrderToolInterface
 */
interface SortOrderResolverInterface
{

    /**
     * @param array|string[] $sortingFieldList
     * @return SortOrderPairCollectionInterface|SortOrderPairInterface[]
     */
    public function resolveSortingFieldList($sortingFieldList);

}