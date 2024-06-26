<?php

namespace App;

use App\Traits\EchoCode;

class Variables
{
    use EchoCode;

    public function run(): void
    {
        $firstName = 'Raven';
        $firstName = 'Tintin';
        // $this->e($firstName);
        dump($firstName);

        // Constants

        // using define
        define('LASTNAME', 'paragas');
        // $this->e(LASTNAME);
        dump(LASTNAME);

        $familyMembers = ['Raven', 'Kristine', 'Ziana', 'Zaniya'];

        define('FAMILY_MEMBERS', $familyMembers);
        // $this->e(FAMILY_MEMBERS);
        dump(FAMILY_MEMBERS);

        // using const
        // const STATUS_PAID = 'paid';
        // echo PHP_EOL;
        // echo STATUS_PAID;

        if (true) {
            define('STATUS', true);
        }
        // $this->e(STATUS);
        dump(STATUS);

        $paid = 'PAID';
        define('STATUS_'.$paid, $paid);
        // $this->e(STATUS_PAID);
        dump(STATUS_PAID);

        // $this->e(PHP_VERSION);
        dump(PHP_VERSION);

        // $this->e(__FILE__);
        dump(__FILE__);

        // Variable Variables
        $foo = 'bar';
        $$foo = 'baz'; // same as $bar = 'baz'
        dump($foo);
        dump($$foo);
        // $this->e($foo);
        // $this->e($$foo);
    }
}
