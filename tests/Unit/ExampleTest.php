<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    public function testing() 
    {
        $expected = 'text';
        $actual = 'text';

        $this->assertEquals($expected, $actual);
    }
    
        
}
