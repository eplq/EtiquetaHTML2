<?php

namespace ITEC\DAW\Tests;

use ITEC\DAW\HTML2\Attribute;
use ITEC\DAW\HTML2\AttributeList;
use PHPUnit\Framework\TestCase;

class AttributeListTest extends TestCase
{
    public function testAttributeList()
    {
        $attributes = new AttributeList();

        $attribute = new Attribute("type", "text");
        $attribute2 = new Attribute("placeholder", "hola");

        $attributes->addAttribute($attribute);
        $attributes->addAttribute($attribute2);

        $this->assertEquals('type="text" placeholder="hola"', $attributes->getHTML());
    }
}
