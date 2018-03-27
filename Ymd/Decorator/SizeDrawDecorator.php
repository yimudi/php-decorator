<?php

namespace Ymd\Decorator;

class SizeDrawDecorator implements DrawDecorator
{
    protected $size;

    function __construct($size = '16px')
    {
        $this->size = $size;
    }

    function beforeDraw()
    {
        echo "<div style='font-size:{$this->size}'>";
    }

    function afterDraw()
    {
        echo "</div>";
    }
}