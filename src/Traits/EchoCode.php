<?php

namespace App\Traits;

trait EchoCode
{
    public function e(mixed $value): void
    {
        if (is_bool($value)) {
            echo $value ? 'true' : 'false';
        } elseif (is_array($value)) {
            print_r($value);
        } else {
            echo "$value";
        }
        echo ' - '.gettype($value).'<br />';
        // echo "{$value} <br />";
    }
}
