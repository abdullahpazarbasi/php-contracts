<?php

namespace Contracts\V1\Domains\Auth;

/**
 * Interface UserHostInterface
 */
interface UserHostInterface
{

    /**
     * @param UserInterface|null $user
     * @return static
     */
    public function setUser(UserInterface $user);

}