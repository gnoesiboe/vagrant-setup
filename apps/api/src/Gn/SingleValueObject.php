<?php

namespace Gn;

/**
 * SingleValueObject
 */
abstract class SingleValueObject implements SingleValueObjectInterface
{

    /**
     * @var
     */
    protected $value;

    /**
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->setValue($value);
    }

    /**
     * @param mixed $value
     */
    protected function setValue($value)
    {
        $this->validateValue($value);
        $this->value = $value;
    }

    /**
     * @param mixed $value
     */
    abstract protected function validateValue($value);

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
