<?php

namespace App;

// Create a new php function

function tryFunc1(): void
{
    echo "Statement 1 <br />";
    echo "Statement 2 <br />";
    echo "Statement 3 <br />";
}

function tryFuncWithParam(string $name): void
{
    echo "Hello {$name} <br />";
}

class Functions
{
    public function run(): void
    {
        // TODO:
        tryFunc1();

        tryFuncWithParam('Raven');
    }
}
