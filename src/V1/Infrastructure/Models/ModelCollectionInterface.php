<?php

namespace Contracts\V1\Infrastructure\Models;

use Closure;
use Doctrine\Common\Collections\Collection;

/**
 * Interface ModelCollectionInterface
 */
interface ModelCollectionInterface extends Collection
{

    /**
     * @return string
     */
    public function getModelClass();

    /**
     * @param object $model
     * @return bool
     */
    public function isModelValid($model);
    
    /**
     * @return bool
     */
    public function isSequential();

    /**
     * @param array|object[] $array
     * @return static
     */
    public function reconstructFromArray($array);
    
    /**
     * @param Collection $collection
     * @return static
     */
    public function reconstructFromCollection(Collection $collection);

    /**
     * @param Closure $p   The predicate which returns a boolean value (TRUE or FALSE)
     *                     Example: function ($key, $model) { ... }
     * @return object|null If the predicate is TRUE then returns the model,
     *                     NULL otherwise
     */
    public function find(Closure $p);

}