<?php
require_once 'ConcreteClass2.php';
$class1 = new ConcreteClass1;
$class1->printOut();
echo "</br>";
echo $class1->prefixValue('FOO_') ."\n";
echo "</br>";

$class2 = new ConcreteClass2;
$class2->printOut();
echo "</br>";
echo $class2->prefixValue('FOO_') ."\n";
echo "</br>";
?>