<?php

// declare(strict_types=1);

/* Data Types & Type Casting */

namespace App;

use App\Traits\EchoCode;
use stdClass;

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

        // $this->e($completed);
        // $this->e($score);
        // $this->e($price);
        // $this->e($greeting);
        dump($completed);
        dump($score);
        dump($price);
        dump($greeting);

        // 4 Compound Types
        // array
        $names = ['raven', 'kristine', 'ziana', 'zaniya'];
        // $this->e($names);
        dump($names);
        // object
        // $this->e(new stdClass());
        dump(new stdClass());
        // callable
        // iterable

        // 2 Special Types
        // resource
        // null

        $sum = $this->sum(2.5, '3');
        dump($sum);

        // type casting
        $three = '3';
        $five = (int) $three;
        dump($five);

        $this->booleans();

        $this->integers();

        $this->floats();

        $this->strings();

        $this->nulls();

        $this->arrays();
    }

    private function booleans(): void
    {
        // BOOLEANS

        // $isComplete = false;
        //
        // if ($isComplete) {
        //     echo 'success';
        // } else {
        //     echo 'fail';
        // }

        $falsyValues = [false, 0, -0, 0.0, -0.0, '', '0', [], null];

        foreach ($falsyValues as $value) {
            dump((bool) $value);
        }

        // integers 0 -0 = false
        // floats 0.0 - 0.0 = false
        // '' = false
        // '0' = false
        // [] = false
        // null = false
    }

    private function integers(): void
    {
        $x = PHP_INT_MAX;
        dump($x);
        dump(0b110);

        $test = null;
        dump(is_int($test));
    }

    private function floats(): void
    {
        dump(PHP_FLOAT_MAX);
        dump(PHP_FLOAT_MIN);

        dump(15.05e5);

        $x = floor((0.1 + 0.7) * 10);
        dump($x);
        $y = (0.1 + 0.7) * 10;
        dump($y);

        $x = 0.23;
        $y = 1 - 0.77;
        dump($x, $y);

        dump($x === $y ? 'yes' : 'no');

        $x = 55;
        dump((float) $x);
    }

    private function strings(): void
    {
        //
        $firstName = 'Will';
        $lastName = 'Smith';

        $fullName = "$firstName $lastName";
        dump($fullName);
        dump($fullName[0], $fullName[-1]);

        dump(strlen($fullName));
        $fullName[10] = 'L';
        dump($fullName);

        // Heredoc
        $text = <<<'TEXT'
Line 1
Line 2
Line 3
TEXT;

        $text = <<<TEXT
Line 1 $fullName
TEXT;

        dump($text);
    }

    private function nulls(): void
    {
        //
        $x = 123;

        dump($x);

        unset($x);

        var_dump($x);

        dump($x);

        dump($y);

        if (is_null($y)) {
            dump('$y is null');
        }

        if ($y === null) {
            dump('$y is null');
        }

        $x = null;

        dump((string) $x);
        dump((int) $x);
        dump((bool) $x);
        dump((array) $x);
    }

    private function sum(int $x, int $y): int
    {
        // we can still modify the data type of parameter here!
        $x = 5.5;

        dump($x, $y);

        return $x + $y;
    }

    private function arrays(): void
    {
        $programmingLanguages = ['PHP', 'Java', 'Python'];

        dump($programmingLanguages[0]);
        // dump($programmingLanguages[-1]); // not going to work with array

        dump(isset($programmingLanguages[3]));

        $programmingLanguages[1] = 'C++';

        dump($programmingLanguages);

        dump(count($programmingLanguages));

        $programmingLanguages[] = 'Ruby';

        dump($programmingLanguages);

        array_push($programmingLanguages, 'Go');

        dump($programmingLanguages);


        // Associative Arrays
        $programmingLanguages = [
            'php' => '8.3',
            'python' => '3.12.0',
            'js' => [
                'creator' => 'johndoe',
                'extension' => '.js',
                'website' => 'johndoe.com',
            ]
        ];

        dump($programmingLanguages['php']);

        dump(isset($programmingLanguages['go']));

        $go = 'go';
        $programmingLanguages[$go] = '1.22';
        dump($programmingLanguages);

        dump($programmingLanguages['js']);
        dump($programmingLanguages['js']['creator']);

        $jsonString = json_encode($programmingLanguages['js']);
        dump(json_decode($jsonString));

        $array = ['a', 'b', 50 => 'c', 'd', 'e'];
        dump($array);

        array_pop($array);
        dump($array);

        array_shift($array);
        dump($array);

        $array = ['a' => 1, 'b' => null];

        dump(array_key_exists('b', $array));
        dump(isset($array['b']));
    }
}
