<?php

/* Data Types & Type Casting */

namespace App;

use App\Traits\EchoCode;

class DataTypes
{
    use EchoCode;

    public function run(): void
    {
        // 4 Scalar Types
        // bool - true / false
        $completed = true;
        // int - 1, 2, 3, 0, -5 (no decimal)
        $score = 75;
        // float - 1.5, 0.1, 0.005, -15.8
        $price = 0.99;
        // string - "Raven"
        $greeting = 'Hello Raven';

        $this->e($completed);
        $this->e($score);
        $this->e($price);
        $this->e($greeting);

        // 4 Compound Types
        // array
        // object
        // callable
        // iterable

        // 2 Special Types
        // resource
        // null
    }
}
