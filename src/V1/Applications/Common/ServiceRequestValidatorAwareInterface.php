<?php

namespace Contracts\V1\Applications\Common;

/**
 * Interface ServiceRequestValidatorAwareInterface
 */
interface ServiceRequestValidatorAwareInterface
{

    /**
     * @param ServiceRequestValidatorInterface $serviceRequestValidator
     * @return static
     */
    public function setServiceRequestValidator($serviceRequestValidator);

}