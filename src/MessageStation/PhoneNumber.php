<?php

namespace MessageStation;

use Exception;
use BadMethodCallException;

class PhoneNumber
{
    public function __call ($method, $parameters)
    {
        if (in_array($method, array('isValid', 'getLength'))) {

        }
        throw new BadMethodCallException("Method [$method] does not exist.");
    }
}
