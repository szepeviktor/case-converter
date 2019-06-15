<?php

use Jawira\CaseConverter\LowerCase;
use PHPUnit\Framework\TestCase;

class LowerCaseTest extends TestCase
{
    /**
     * @covers \Jawira\CaseConverter\LowerCase::glue
     */
    public function testGlue()
    {
        // Disabling constructor with one stub method
        $mock = $this->getMockBuilder(LowerCase::class)
                     ->disableOriginalConstructor()
                     ->setMethods(['glueUsingRules'])
                     ->getMock();

        // Configuring stub
        $mock->expects($this->once())
             ->method('glueUsingRules')
             ->with(LowerCase::DELIMITER, MB_CASE_LOWER)
             ->willReturn('e1bfd762321e409cee4ac0b6e841963c');

        /** @var \Jawira\CaseConverter\LowerCase $mock */
        $returned = $mock->glue();
        $this->assertSame('e1bfd762321e409cee4ac0b6e841963c', $returned, 'Returned value is not the expected');
    }
}