<?php

namespace App;

class Callables
{
    public function run(): void
    {
        // TODO:
    }

    public function sayHello(string $name): string
    {
        return "Hello, $name!";
    }

    public static function add(int $a, int $b): int
    {
        return $a + $b;
    }
}
