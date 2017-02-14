<?php

use app\ChildClass;

require_once '../app/classes/Loader.php';

$loader = new Loader();

spl_autoload_register([$loader, 'loadClass']);

$myChildClass = new ChildClass();
$myChildClass -> echoInfo();

?>