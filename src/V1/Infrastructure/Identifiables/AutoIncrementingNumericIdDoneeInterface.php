<?php

namespace Contracts\V1\Infrastructure\Identifiables;

/**
 * Interface AutoIncrementingNumericIdDoneeInterface
 */
interface AutoIncrementingNumericIdDoneeInterface
{

    /**
     * @param int|null $id
     * @return static
     */
    public function setId($id);

}