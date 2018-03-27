<?php

namespace Ymd\Decorator;

class Canvas
{
    public $data;

    protected $decorators = [];

    /**
     * initial Canvas
     * @param int $width
     * @param int $height
     * @return array
     */
    function init($width = 20, $height = 10)
    {
        $data = [];
        for ($i = 0; $i < $height; $i++) {
            for ($j = 0; $j < $width; $j++) {
                $data[$i][$j] = '*';
            }
        }
        $this->data = $data;
    }

    function addDecorator(DrawDecorator $decorator)
    {
        $this->decorators[] = $decorator;
    }

    function beforeDraw()
    {
        foreach ($this->decorators as $decorator) {
            $decorator->beforeDraw();
        }
    }

    function afterDraw()
    {
        $decorators = array_reverse($this->decorators);
        foreach ($decorators as $decorator) {
            $decorator->afterDraw();
        }
    }

    /**
     * draw a rectangle
     * @param $a1
     * @param $a2
     * @param $b1
     * @param $b2
     */
    function rect($a1, $a2, $b1, $b2)
    {
        foreach ($this->data as $k1 => $line) {
            if ($k1 < $a1 or $k1 > $a2) continue;
            foreach ($line as $k2 => $char) {
                if ($k2 < $b1 or $k2 > $b2) continue;
                $this->data[$k1][$k2] = '&nbsp;&nbsp;';
            }
        }
    }

    /**
     * start drawing
     */
    function draw()
    {
        $this->beforeDraw();
        foreach ($this->data as $line) {
            foreach ($line as $item) {
                echo $item;
            }
            echo "<br/>";
        }
        $this->afterDraw();
    }
}