<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface LimitPickerInterface
 */
interface LimitPickerInterface
{

    /**
     * @param int $limit
     * @return static
     */
    public function setLimit($limit);

}