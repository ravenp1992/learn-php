<?php

// INFO: Expressions
// everything that has a value or evaluates to a value.

namespace App;

class Expressions
{
    public function run(): void
    {
        // after the equal sign is an expression if it evaluates to a value
        $x = 5;
        $y = $x;

        // $x === $y is an expression because it evaluates to a boolean value
        $z = $x === $y;

        dump($z);

        // $x < 5 is an expression because it evaluates to a boolean value.
        if ($x < 5) {
            dump('Hello');
        }
    }
}
