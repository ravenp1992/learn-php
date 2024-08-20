<?php

namespace App;

class MatchExpression
{
    public function run(): self
    {
        $monthNum = 3;

        $monthName = match ($monthNum) {
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December',
            default => 'Unknown',
        };

        echo $monthName.'<br />';

        return $this;
    }

    public function multiplePatterns(): self
    {
        $month = 7;

        $season = match ($month) {
            1, 2, 12 => 'Winter',
            3, 4, 5 => 'Spring',
            6, 7, 8 => 'Summer',
            9, 10, 11 => 'Autumn',
            default => 'invalid'
        };

        echo "$season<br />";

        return $this;
    }

    public function exercise(): void
    {
        $numGrade = 5;

        $letterGrade = match ($numGrade) {
            5 => 'A',
            4 => 'B',
            3 => 'C',
            2 => 'D',
            1 => 'F',
            default => 'invalid',
        };

        echo "Grade: $letterGrade<br />";
    }
}
