<?php
namespace Test\Demo;

use Test\TestCase;

class DemoTest extends TestCase
{
    /**
     *　演示测试
     */
    public function testDemo()
    {
        $this->assertEquals(
            'Hello Think',
            'Hello Think'
        );
    }
}
