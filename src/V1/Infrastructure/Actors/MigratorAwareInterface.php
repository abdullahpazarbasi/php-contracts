<?php

namespace Contracts\V1\Infrastructure\Actors;

/**
 * Interface MigratorAwareInterface
 */
interface MigratorAwareInterface
{

    /**
     * @param MigratorInterface $migrator
     * @return static
     */
    public function setMigrator(MigratorInterface $migrator);

}