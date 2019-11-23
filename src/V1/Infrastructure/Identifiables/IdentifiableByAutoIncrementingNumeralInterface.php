<?php

namespace Contracts\V1\Infrastructure\Identifiables;

/**
 * Interface IdentifiableByAutoIncrementingNumeralInterface
 */
interface IdentifiableByAutoIncrementingNumeralInterface extends IdentifiableInterface
{

    /**
     * @return int|null
     */
    public function getId();

}