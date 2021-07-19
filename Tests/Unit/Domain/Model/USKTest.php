<?php
declare(strict_types=1);

namespace MichaelEder\Games\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Michael Eder 
 */
class USKTest extends UnitTestCase
{
    /**
     * @var \MichaelEder\Games\Domain\Model\USK
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MichaelEder\Games\Domain\Model\USK();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getAgeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getAge()
        );
    }

    /**
     * @test
     */
    public function setAgeForIntSetsAge()
    {
        $this->subject->setAge(12);

        self::assertAttributeEquals(
            12,
            'age',
            $this->subject
        );
    }
}
