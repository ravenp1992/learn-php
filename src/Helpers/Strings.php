<?php

namespace App\Helpers;

class Strings
{
    /**
     * Create a separator with title
     *
     * @param string $title
     * @return void
     */
    public static function separator(string $title): void
    {
        echo "<div class='separator'>" . $title . '</div>';
    }

    /**
     * Greet a person
     *
     * @param string $greeting
     * @param string $name
     * @return void
     */
    public static function greeting(string $greeting, string $name): void
    {
        echo "{$greeting}, {$name}";
    }
}
