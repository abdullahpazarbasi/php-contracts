<?php

namespace Contracts\V1\Infrastructure\Paginatables;

/**
 * Interface ValueBasedMethodPaginatorInterface
 */
interface ValueBasedMethodPaginatorInterface extends PageNumberDonorInterface, PageNumberDoneeInterface, PageSizeDonorInterface, PageSizeDoneeInterface
{
    
}