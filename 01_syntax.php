<?php

echo 'Hello world';
// print expression return 1
echo print 'Hello world';
// echo is faster than print
echo 'Hello', ' ', 'world';

$name = 'Raven';
echo PHP_EOL;
echo $name;

// you cannot set $this
// $this = 'hello'; // refers to the object

// variable are assign by value
$x = 1;
$y = 1;
$x = 3;
echo PHP_EOL;
echo $y;

// to assign a value by reference use & ampersand.
$x = 1;
$y = &$x;
$x = 3;
echo PHP_EOL;
echo $y;

$firstName = 'Raven';
echo PHP_EOL;
echo "Hello $firstName";
echo PHP_EOL;
echo "Hello {$firstName}";
echo PHP_EOL;
echo 'Hello '.$firstName;
