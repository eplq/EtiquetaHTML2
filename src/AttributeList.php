<?php

namespace ITEC\DAW\HTML2;

class AttributeList
{
    private array $attributes;

    public function __construct()
    {
        $this->attributes = [];
    }

    public function addAttribute(Attribute $attribute)
    {
        array_push($this->attributes, $attribute);
    }

    public function getHTML()
    {
        return rtrim(array_reduce($this->attributes, function ($carry, $item) {
            return $carry . $item->getHTML() . " ";
        }, ""));
    }
}
