<?php

define('BASEDIR', __DIR__);

require BASEDIR.'/Ymd/Loader.php';

spl_autoload_register('\\Ymd\\Loader::autoload');

$canvas = new \Ymd\Decorator\Canvas();
$canvas->init();
$canvas->addDecorator(new \Ymd\Decorator\ColorDrawDecorator('blue'));
$canvas->addDecorator(new \Ymd\Decorator\SizeDrawDecorator('10px'));
$canvas->rect(3,6,7,13);
$canvas->draw();


