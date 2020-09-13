<?php

use Lib\Hello;
use Model\Person;

echo "INIT ";

$a = new Hello;
echo $a->testFunction();

$b = new Person;
echo $b->getName();
?>
