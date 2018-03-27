<?php
/**
 * User: Administrator
 * Email: aphie1900@sina.com
 * Date & Time: 3/27/2018 1:31 PM
 */

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