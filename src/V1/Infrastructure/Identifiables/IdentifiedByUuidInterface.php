<?php

namespace Contracts\V1\Infrastructure\Identifiables;

/**
 * Interface IdentifiedByUuidInterface
 */
interface IdentifiedByUuidInterface extends IdentifiableInterface
{

    /**
     * @return string
     */
    public function getId();

}