<?php

require 'Number.php';
require 'EvenNumber.php';
require 'Debug.php';

// namespace and file
use HES\Number;
use HES\EvenNumber;
use HES\Debug as DebugA;
use ABC\Debug as DebugB;

$example1 = new Number(9);
$example2 = new EvenNumber(9);

// Invoking objects
// var_dump($example1->isValid());
// var_dump($example2->isValid());

// $example1->test();

// $debug = new Debug();
// $debug->dump('Hello world');

// var_dump(['a', 'b', ['x', 'y', 'z']]);
HES\Debug::dump(['a', 'b', ['x', 'y', 'z']]);