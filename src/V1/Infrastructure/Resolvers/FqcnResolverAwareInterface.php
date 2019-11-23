<?php

namespace Contracts\V1\Infrastructure\Resolvers;

/**
 * Interface FqcnResolverAwareInterface
 */
interface FqcnResolverAwareInterface
{

    /**
     * @param FqcnResolverInterface $fqcnResolver
     * @return static
     */
    public function setFqcnResolver(FqcnResolverInterface $fqcnResolver);

}