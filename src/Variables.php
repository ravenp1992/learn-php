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
        $this->e($firstName);

        // Constants

        // using define
        define('LASTNAME', 'paragas');
        $this->e(LASTNAME);

        $familyMembers = ['Raven', 'Kristine', 'Ziana', 'Zaniya'];

        define('FAMILY_MEMBERS', $familyMembers);
        $this->e(FAMILY_MEMBERS);

        // using const
        // const STATUS_PAID = 'paid';
        // echo PHP_EOL;
        // echo STATUS_PAID;

        if (true) {
            define('STATUS', true);
        }
        $this->e(STATUS);

        $paid = 'PAID';
        define('STATUS_'.$paid, $paid);
        $this->e(STATUS_PAID);

        $this->e(PHP_VERSION);

        $this->e(__FILE__);

        // Variable Variables
        $foo = 'bar';
        $$foo = 'baz'; // same as $bar = 'baz'
        $this->e($foo);
        $this->e($$foo);
    }
}
