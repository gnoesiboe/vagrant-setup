<?php

namespace Gn;

/**
 * Environment
 *
 * @method string getValue
 */
class Environment extends SingleValueObject
{

    /**
     * @var string
     */
    const DEV = 'dev';

    /**
     * @var string
     */
    const TEST = 'test';

    /**
     * @var string
     */
    const STAGING = 'staging';

    /**
     * @var string
     */
    const PROD = 'prod';

    /**
     * @var array
     */
    protected static $supportedValues = array(
        self::DEV,
        self::TEST,
        self::STAGING,
        self::PROD
    );

    /**
     * @param mixed $value
     */
    protected function validateValue($value)
    {
        $this->validateIsString($value);
        $this->validateIsSupportedEnviroment($value);
    }

    /**
     * @param mixed $value
     * @throws \UnexpectedValueException
     */
    protected function validateIsSupportedEnviroment($value)
    {
        if (in_array($value, self::$supportedValues) === false) {
            throw new \UnexpectedValueException('Value should be one of: ' . implode(', ', self::$supportedValues));
        }
    }

    /**
     * @param mixed $value
     * @throws \UnexpectedValueException
     */
    protected function validateIsString($value)
    {
        if (is_string($value) === false) {
            throw new \UnexpectedValueException('Value should be of type string');
        }
    }
}
