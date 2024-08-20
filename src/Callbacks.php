<?php

namespace App;

class Callbacks
{
    public function run(string $param): void
    {
        echo "<br />Callback executed with parameter: $param";
    }
}
