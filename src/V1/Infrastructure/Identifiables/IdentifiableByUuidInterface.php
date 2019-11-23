<?php

namespace Contracts\V1\Infrastructure\Identifiables;

/**
 * Interface IdentifiableByUuidInterface
 */
interface IdentifiableByUuidInterface extends IdentifiableInterface
{

    /**
     * @return string|null
     */
    public function getId();

}