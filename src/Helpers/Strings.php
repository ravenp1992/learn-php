<?php

namespace App\Helpers;

class Strings
{
    public static function separator(string $title): void
    {
        echo "<div class='separator'>".$title.'</div>';
    }
}
