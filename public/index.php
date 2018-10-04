<?php
require '../vendor/autoload.php';
 
use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\Hello;
//3A417118_李昱佑_1004更改
$world = new World();
$lara= new Lara();
$vincent= new Hello\Someone('Vincent');

$mary = new \Demo\Hello\Someone('Mary');
$john = new Demo\Hello\Someone('John');
