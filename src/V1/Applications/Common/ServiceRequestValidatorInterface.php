<?php

namespace Contracts\V1\Applications\Common;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintViolationInterface;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Traversable;

/**
 * Interface ServiceRequestValidatorInterface
 */
interface ServiceRequestValidatorInterface
{

    /**
     * @param mixed $value
     * @param Constraint|Constraint[] $constraints
     * @param array|null $groups
     * @return ConstraintViolationListInterface
     */
    public function validate($value, $constraints, $groups = null);

    /**
     * @param ConstraintViolationListInterface|ConstraintViolationInterface[]|Traversable|array $constraintViolations
     * @return void
     */
    public function assertConstraintViolationListEmpty($constraintViolations);

}