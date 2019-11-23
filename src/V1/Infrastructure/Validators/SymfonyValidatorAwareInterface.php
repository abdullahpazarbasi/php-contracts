<?php

namespace Contracts\V1\Infrastructure\Validators;

use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Interface SymfonyValidatorAwareInterface
 */
interface SymfonyValidatorAwareInterface
{

    /**
     * @param ValidatorInterface $validator
     * @return static
     */
    public function setValidator($validator);

}