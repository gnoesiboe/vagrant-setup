<?php

namespace Gn;

/**
 * BoolTest
 *
 * @author Gijs Nieuwenhuis <gijs.nieuwenhuis@freshheads.com>
 */
class BoolTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var string
     */
    protected $expectedExceptionName = '\UnexpectedValueException';

    public function testDoesNotAcceptString()
    {
        $this->setExpectedException($this->expectedExceptionName);

        new Bool('somestring');
    }

    public function testDoesNotAcceptObject()
    {
        $this->setExpectedException($this->expectedExceptionName);

        new Bool(new \stdClass());
    }

    public function testDoesNotAcceptArray()
    {
        $this->setExpectedException($this->expectedExceptionName);

        new Bool(array());
    }

    public function testDoesNotAcceptInt()
    {
        $this->setExpectedException($this->expectedExceptionName);

        new Bool(123);
    }

    public function testDoesNotAcceptFloat()
    {
        $this->setExpectedException($this->expectedExceptionName);

        new Bool(123.3923);
    }

    public function testAcceptsBool()
    {
        new Bool(false);
    }

    public function testValueMatchesInput()
    {
        $value = true;

        $valueObject = new Bool($value);

        $this->assertTrue($valueObject->getValue() === $value);
    }
}
