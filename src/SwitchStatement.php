<?php

namespace App;

function x(): int
{
    sleep(3);
    echo "Done<br />";

    return 3;
}

class SwitchStatement
{
    public function run(): void
    {
        $paymentStatus = 'declined';

        switch ($paymentStatus) {
            case 'paid':
                echo 'Paid';
                break;

            case 'declined':
            case 'rejected':
                echo 'Payment Declined';
                break;

            case 'pending':
                echo 'Pending Payment';
                break;
            default:
                echo 'Unknown Payment Status';
                break;
        }

        echo '<br />';
        // switch statement use loose type check comparison
        $paymentStatus = 1;
        switch ($paymentStatus) {
            case '1':
                echo 'Paid';
                break;
            case '2':
                echo 'Declined';
                break;
            default:
                echo 'Undefined Payment';
                break;
        }

        echo "<br />";

        // break inside switch statement does not break of a loop
        // to break outside a loop there a an optional argument for break
        // on how many nested enclosing structure you want to break out of.
        $paymentStatus = [1, 2, 3];

        foreach ($paymentStatus as $status) {
            switch ($status) {
                case '1':
                    echo "Paid <br />";
                    break 2;
                case '2':
                    echo "Declined <br />";
                    break;
                case '3':
                    echo "Pending Payment <br />";
                    break;
                default:
                    echo 'Unkown Payment';
                    break;
            }
        }

        // difference between if statement and switch statement

        // if (x() == 1) { // x() will be called here sleep for 3 seconds
        // } elseif (x() == 2) { // x() will be called here sleep for 3 seconds
        // } elseif (x() == 3) { // x() will be called here sleep for 3 seconds
        // }

        // to avoid calling x() method multiple times assigned the result to the variable
        // and use that variable inside if, and elseif
        $test = x();
        if ($test == 1) { // x() will be called here sleep for 3 seconds
        } elseif ($test == 2) { // x() will be called here sleep for 3 seconds
        } elseif ($test == 3) { // x() will be called here sleep for 3 seconds
        }

        // in switch statement
        // x() will be called only once
        // switch (x()) {
        //     case 1:
        //         break;
        //     case 2:
        //         break;
        //     case 3:
        //         break;
        // }
    }
}
