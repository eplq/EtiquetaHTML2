<?php

namespace ITEC\DAW\Tests;

use ITEC\DAW\HTML2\Attribute;
use PHPUnit\Framework\TestCase;

class AttributeTest extends TestCase
{
    public function testAttribute()
    {
        $attribute = new Attribute("type", "text");

        $this->assertEquals("type", $attribute->getName());
        $this->assertEquals("text", $attribute->getValue());

        $attribute->setValue("range");
        $this->assertEquals("range", $attribute->getValue());

        $this->assertEquals('type="range"', $attribute->getHTML());
    }
}
