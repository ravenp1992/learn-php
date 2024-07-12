<?php

namespace App;

class ControlStructures
{
    public function run(): void
    {
        if (true) {
            echo 'true';
        } else {
            echo 'false';
        }

        echo nl2br("\n");

        $score = 95;
        if ($score >= 90) {
            echo 'A';
        } elseif ($score >= 80) {
            echo 'B';
        } elseif ($score >= 70) {
            echo 'C';
        } elseif ($score >= 60) {
            echo 'D';
        } else {
            echo 'F';
        }
    }
}
