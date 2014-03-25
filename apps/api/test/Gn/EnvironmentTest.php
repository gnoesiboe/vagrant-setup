<?php


namespace Gn;


class EnvironmentTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var string
     */
    protected $expectedException = '\UnexpectedValueException';

    public function testDoesNotAcceptObject()
    {
        $this->setExpectedException($this->expectedException);

        new Environment(new \stdClass());
    }

    public function testDoesNotAcceptArray()
    {
        $this->setExpectedException($this->expectedException);

        new Environment(array());
    }

    public function testDoesNotAcceptInt()
    {
        $this->setExpectedException($this->expectedException);

        new Environment(1234);
    }

    public function testDoesNotAcceptFloat()
    {
        $this->setExpectedException($this->expectedException);

        new Environment(32323.2393);
    }

    public function testDoesNotAcceptBoolean()
    {
        $this->setExpectedException($this->expectedException);

        new Environment(true);
    }

    public function testAcceptsString()
    {
        new Environment('dev');
    }

    public function testDoesNotAcceptNonSupportedEnvironmentValues()
    {
        $this->setExpectedException($this->expectedException);

        new Environment('nonSupportedEnvironment');
    }

    public function testAcceptsSupportedEnvironment()
    {
        new Environment(Environment::DEV);
    }

    public function testGetValueOnEnvironmentMatchesTheInput()
    {
        $input = Environment::DEV;

        $valueObject = new Environment($input);

        $this->assertTrue($valueObject->getValue() === $input);
    }
}
