<?php

namespace Contracts\V1\Infrastructure\Actors;

/**
 * Interface MigratorInterface
 */
interface MigratorInterface
{

    /**
     * @param object $sourceObject
     * @param object $targetObject
     * @param array $mapping Mapping Array. Pattern: [ [ 'sourceFieldName' => 'targetFieldName' ] ]
     * @param bool $strictMapping
     * @return void
     */
    public function migrate($sourceObject, $targetObject, array $mapping, $strictMapping = FALSE);

}