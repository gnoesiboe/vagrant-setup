<?php


namespace Gn;

/**
 * SingleValueObjectTest
 */
class SingleValueObjectTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Object
     */
    protected $stub = null;

    /**
     * @var string
     */
    protected $testValue = 'asdfjd9323';

    /**
     * Ran before each test in this testcase
     */
    protected function setUp()
    {
        parent::setUp();

        $this->setUpConcreteMockup();
    }

    public function testOutputMatchesInput()
    {
        $this->assertTrue($this->testValue === $this->stub->getValue());
    }

    /**
     * Setup the concrete mockup that is used to test this
     * abstract class
     */
    protected function setUpConcreteMockup()
    {
        $this->stub = $this->getMockForAbstractClass('Gn\SingleValueObject', array(
            $this->testValue
        ));
    }
}
