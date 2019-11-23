<?php

namespace Contracts\V1\Infrastructure\Resolvers;

/**
 * Interface FqcnResolverInterface
 */
interface FqcnResolverInterface
{

    /**
     * @param string $targetClassName
     * @param string $sourceClassFqnName
     * @return string
     */
    public function resolve($targetClassName, $sourceClassFqnName);

}