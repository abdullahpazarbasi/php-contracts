<?php

namespace Contracts\V1\Infrastructure\Pairs;

/**
 * Interface SortOrderPairInterface
 */
interface SortOrderPairInterface
{

    /**
     * @return string
     */
    public function getSort();

    /**
     * @return string
     */
    public function getOrder();

}