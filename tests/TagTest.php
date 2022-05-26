<?php

namespace ITEC\DAW\Tests;

use ITEC\DAW\HTML2\Tag;
use ITEC\DAW\HTML2\Attribute;
use PHPUnit\Framework\TestCase;

class TagTest extends TestCase
{
    public function testTag()
    {
        $tag = new Tag("div");

        $this->assertEquals("div", $tag->getName());

        return $tag;
    }

    /**
     * @depends testTag
     */
    public function testContent(Tag $tag)
    {
        $tag->addContent(new Tag("p"));

        $this->assertEquals("<div><p></p></div>", $tag->getHTML());

        return $tag;
    }

    /**
     * @depends testContent
     */
    public function testAttribute(Tag $tag)
    {
        $tag->addAttribute(new Attribute("class", "clase1 clase2"));

        $this->assertEquals('<div class="clase1 clase2"><p></p></div>', $tag->getHTML());
    }
}
