<?php

namespace Contracts\V1\Infrastructure\Identifiables;

/**
 * Interface UuidDoneeInterface
 */
interface UuidDoneeInterface
{

    /**
     * @param string|null $id
     * @return static
     */
    public function setId($id);

}