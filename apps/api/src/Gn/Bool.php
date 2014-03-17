<?php

namespace Gn;

/**
 * Boolean
 *
 * @method bool getValue
 */
class Bool extends SingleValueObject
{

    /**
     * @param mixed $value
     * @throws \UnexpectedValueException
     */
    protected function validateValue($value)
    {
        $this->validateIsBoolean($value);
    }

    /**
     * @param mixed $value
     * @throws \UnexpectedValueException
     */
    protected function validateIsBoolean($value)
    {
        if (is_bool($value) === false) {
            throw new \UnexpectedValueException('Value should be of type boolean');
        }
    }
}
