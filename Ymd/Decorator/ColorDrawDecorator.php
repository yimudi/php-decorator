<?php
/**
 * User: Administrator
 * Email: aphie1900@sina.com
 * Date & Time: 3/27/2018 1:23 PM
 */

namespace Ymd\Decorator;


class ColorDrawDecorator implements DrawDecorator
{
    protected $color;

    function __construct($color = 'red')
    {
        $this->color = $color;
    }

    function beforeDraw()
    {
        echo "<div style='color:{$this->color}'>";
    }

    function afterDraw()
    {
        echo "</div>";
    }
}