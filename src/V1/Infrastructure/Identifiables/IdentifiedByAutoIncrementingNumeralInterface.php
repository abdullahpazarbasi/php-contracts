<?php

namespace Contracts\V1\Infrastructure\Identifiables;

/**
 * Interface IdentifiedByAutoIncrementingNumeralInterface
 */
interface IdentifiedByAutoIncrementingNumeralInterface extends IdentifiableInterface
{

    /**
     * @return int
     */
    public function getId();

}