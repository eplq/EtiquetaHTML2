<?php

namespace ITEC\DAW\HTML2;

class Tag
{
    private string $name;
    private AttributeList $attributes;
    private array $content;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->attributes = new AttributeList();
        $this->content = [];
    }

    public function getName()
    {
        return $this->name;
    }

    public function addContent(Tag $tag)
    {
        array_push($this->content, $tag);
    }

    public function addAttribute(Attribute $attribute)
    {
        $this->attributes->addAttribute($attribute);
    }

    public function getHTML()
    {
        $result = "<$this->name ";
        if ($this->attributes->count() == 0) {
            $result = "<$this->name";
        }
        $result .= $this->attributes->getHTML();
        $result .= ">";

        foreach ($this->content as $element) {
            $result .= $element->getHTML();
        }

        $result .= "</$this->name>";

        return $result;
    }
}
