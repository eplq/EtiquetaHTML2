<?php

namespace ITEC\DAW\HTML2;

class Attribute
{
    private string $name;
    private string $value;

    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(string $newValue)
    {
        $this->value = $newValue;
    }

    public function getHTML()
    {
        return $this->name . '="' . $this->value . '"';
    }
}
