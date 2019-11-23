<?php

namespace Contracts\V1;

use Serializable;
use JsonSerializable;

/**
 * Interface BeanInterface
 */
interface BeanInterface extends Serializable, JsonSerializable
{

    /**
     * @return void
     */
    public function __construct();

}