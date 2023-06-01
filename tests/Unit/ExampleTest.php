<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    public function retest() 
    {
        $expected = 520;
        $actual = 520;

        $this->assertEquals($expected, $actual);
    }
    
        
}
