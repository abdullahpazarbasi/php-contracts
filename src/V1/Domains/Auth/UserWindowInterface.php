<?php

namespace Contracts\V1\Domains\Auth;

/**
 * Interface UserWindowInterface
 */
interface UserWindowInterface
{

    /**
     * @return UserInterface|null
     */
    public function getUser();

}