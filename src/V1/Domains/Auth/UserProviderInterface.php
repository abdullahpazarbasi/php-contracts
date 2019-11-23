<?php

namespace Contracts\V1\Domains\Auth;

/**
 * Interface UserProviderInterface
 */
interface UserProviderInterface
{

    /**
     * @return UserInterface
     */
    public function getUser();

}