<?php

namespace App;

class Loops
{
    public string $var1 = 'value 1';
    public string $var2 = 'value 2';
    public string $var3 = 'value 3';

    protected $protected = 'protected var';
    private $private = 'private var';

    public function run(): self
    {
        // while
        echo 'while loop';
        $x = 0;
        while ($x < 5) {
            dump($x);
            $x++;
        }

        // do-while
        echo 'do-while loop';
        $x = 1;
        do {
            dump($x);
            $x++;
        } while ($x <= 5);

        // for
        echo 'for loop';
        for ($i = 0; $i < 3; $i++) {
            dump($i);
        }

        // Will print 01234
        // because print run before the checking $i < 4
        for ($i = 0; print $i, $i < 4; $i++) {
            //
        }

        // performance issue here!
        // we're calling strlen() for each iteration
        echo '<br />';
        $text = 'Hello World';
        for ($i = 0; $i < strlen($text); $i++) {
            echo $text[$i] . '<br />';
        }

        // to avoid performance issue
        // create another variable to store the length/count
        // avoid function call on every iteration especially if the function is expensive
        $words = ['a', 'b', 'c', 'd'];
        for ($i = 0, $length = count($words); $i < $length; $i++) {
            echo $words[$i] . '<br />';
        }

        echo "<br />";
        // foreach
        // use to iterate over array or object
        echo "foreach loop";
        echo "<br />";
        $assocArr = ['a' => 1, 'b' => 2, 'c' => 3];
        foreach ($assocArr as $key => $value) {
            echo nl2br("{$key} : {$value}\n");
        }

        $arr = [1, 2, 3, 4, 5];
        foreach ($arr as $num) {
            echo nl2br("{$num}\n");
        }

        $languages = ['php', 'python', 'javascript'];
        // the $value variable is not destroyed after the foreach loop
        foreach ($languages as $key => $value) {
            echo nl2br("{$key} : {$value} \n");
        }

        echo $value;


        $user = [
            'name' => 'Raven',
            'email' => 'ravenp.dev@gmail.com',
            'skills' => ['php', 'react']
        ];

        foreach ($user as $key => $value) {
            if (is_array($value)) {
                $value = implode(',', $value);
            }

            echo nl2br("{$key} : {$value}\n");
        }

        return $this;
    }

    public function iterateVisible()
    {
        echo "Loops::iterateVisible <br />";
        foreach ($this as $key => $value) {
            print "$key => $value\n";
        }
    }
}
