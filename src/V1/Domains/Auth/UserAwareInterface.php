<?php

namespace Contracts\V1\Domains\Auth;

/**
 * Interface UserAwareInterface
 */
interface UserAwareInterface
{

    /**
     * @param UserInterface $user
     * @return static
     */
    public function setUser(UserInterface $user);

}