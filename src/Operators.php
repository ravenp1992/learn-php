<?php

namespace App;

class Operators
{
    public function run()
    {
        // INFO: ARITHMETIC OPERATORS (+ - * / % **)
        {
            $x = 10;
            $y = 2;

            dump($x + $y);
            dump($x - $y);
            dump($x * $y);
            dump($x / $y);
            dump($x % $y);
            dump($x ** $y);

            $z = '10'; // string
            $z = +'10'; // int
            dump(gettype($z));

            $x = 10;
            $y = 0;
            // dump($x / $y); // Fatal Error
            dump(fdiv($x, $y));

            $x = -10;
            $y = 3;
            dump($x % $y); // -1 will use the sign of the variable you are trying to divide
            dump(fmod($x, $y));

            $x = 10;
            $y = -3;
            dump($x % $y); // 1
        }

        // INFO: ASSIGNMENT OPERATORS (= += -= *= /= %= **=)
        {
            $x = 5;
            $x += 1;
            dump($x);
            $x *= 2;
            dump($x);
        }

        // INFO: STRING OPERATORS (. .=)
        {
            $txt = 'Hello';
            $txt .= ' world';
            dump($txt);
        }

        // INFO: COMPARISION OPERATORS (== === != <> !== < > >= <= <==> ?? ?:)
        {
            $x = 5;
            $y = '5';

            dump($x != $y);
            dump($x <> $y);
            dump($x !== $y);

            // return 0 if both values are equal
            // return 1 if $x is greater than $y
            // return -1 if $x is less than $y
            dump($x <=> $y);

            // in php 8 0 will get converted to string '0'
            // in php 7.4 'Hello' get converted to number
            dump(0 == 'Hello');

            $x = 'Hello World';
            $y = strpos($x, 'H');

            if ($y === false) {
                echo 'H not found';
            } else {
                echo 'H Found at index ' . $y;
            }

            $x = null;
            $y = $x ?? 'hello';
            dump($y);

            // ternary operator
            dump($x ? 'yes' : 'no');
        }

        // INFO: ERROR CONTROL OPERATOR (@)
        {
            // will get a warning because file not exist
            // adding @ will suppress the error

            // not recommended
            $x = file('foo.txt');
        }

        // INFO: INCREMENT/DECREMENT OPERATORS (++, --)
        {
            $x = 5;

            dump($x++);
            dump($x);

            $x = true;

            // Warning: Increment on type bool has no effect,
            dump(++$x);

            $x = null;
            // Warning: Decrement on type null has no effect.
            dump(--$x);
            // But increment on type null will result to 1
            dump(++$x);

            $x = 'abc';
            // Deprecated: Decrement on non-numeric string has no effect and is deprecated
            dump(--$x);
            dump(++$x); // will return abd

            // // post increment
            // $x++;
            // // pre increment
            // ++$x;
            // // post decrement
            // $x--;
            // // pre decrement
            // --$x;
        }

        // INFO: LOGICAL OPERATORS (&& || ! and or xor)
        {
            // && operator evaluates to true only if both operands evaluates to true.
            $a = true;
            $b = true;
            dump($a && $b);

            // || evaluates to true if either $x or $y evaluates to true
            $a = true;
            $b = false;
            dump($a || $b);

            // ! negates the value
            $a = true;
            dump(!$a);

            // PHP does short circuit
            // The || operator will short circuit if the first operand evaluates to true and the rest will be disregarded
            //  $a is true so $this->hello() will not be executed
            dump($a || $this->hello());

            // Same with and operator if the first operand is false it will short circuit and disregard the rest
            $a = false;
            dump($a && $this->hello());
        }

        // INFO: BITWISE OPERATORS (& | ^ ~ << >>)
        {
            $x = 6;
            $y = 3;
            // &
            // 110
            // 011
            // ---
            // 010 => 2
            dump($x & $y); // 2

            // | (or)
            // 110
            // 011
            // ---
            // 111 => 7
            dump($x | $y); // 7

            // ^ (xor) Bits thatt are set in $a or $b but not both are set.
            // 110
            // 011
            // ---
            // 101 => 5
            dump($x ^ $y); // 5

            // ~ Bits that are set in $x are not set, and vice versa.
            // $x = 6
            // 110 = 001
            // 011
            // ---
            dump(~$x & $y); // 1

            // << shift the bits of $x $y sttteps to the left (each step means "multiply by two")
            // 110
            // <<
            // 110000
            dump($x << $y); // 48
            // 6 * 2 * 2 * 2 = 48

            // shift the bits of $x $y steps to the right (each step means divide by two)
            $x = 8;
            $y = 1;
            // 1000
            // >>
            // 0100
            dump($x >> $y); // 4
        }

        // INFO: ARRAY OPERATORS (+ == === != <> !===)
        {
            // + Union of $a and $b
            // Returns the right-hand array appended to the left-hand array; for keys that exist in both arrays,
            // for keys thatt exist in both arrays, the elements from the left-hand array will be used,
            // and matching elementts from the right-hand array will be ignored.
            $x = ['a', 'b', 'c'];
            $y = ['a', 'b', 'f', 'c', 'd'];
            dump($x + $y);

            $x = ['a' => 1, 'b' => 2, 'c' => 3];
            $y = ['a' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8];
            dump($x + $y);

            $x = ['a', 'b', 'c'];
            $y = ['a', 'b', 'c'];
            // true if $x and $y have the same key/value pairs.
            dump($x == $y);

            $x = ['a' => 1, 'b' => 2, 'c' => 3];
            $y = ['a' => 1, 'c' => 3, 'b' => 2];
            echo 'non-strict comparision';
            dump($x == $y);

            $x = ['a' => 1, 'b' => 2, 'c' => 3];
            $y = ['a' => 1, 'c' => 3, 'b' => 2];
            echo 'strict comparision';
            // true if $x and $y have the same key/value pairs in the same order and of the same types.
            dump($x === $y);

            $x = ['a', 'b', 'c'];
            $y = ['d', 'e', 'f'];
            // true if $x is not equal to $y.
            dump($x != $y);

            $x = ['a', 'b', 'c'];
            $y = ['d', 'e', 'f'];
            // true if $x is not identical to $y.
            dump($x !== $y);
        }

        // INFO: EXECUTION OPERATORS (``)

        // INFO: TYPE OPERATORS (instanceof)
    }

    /**
     * for testing purposes only
     *
     * @return void
     */
    public function hello(): void
    {
        dump('hello here!');
    }
}
