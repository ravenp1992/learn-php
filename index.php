<?php

declare(strict_types=1);

require 'vendor/autoload.php';

require_once './top_template.html';

use App\ControlStructures;
use App\DataTypes;
use App\Expressions;
use App\Helpers\Strings;
use App\Loops;
use App\OperatorPrecedence;
use App\Operators;
use App\Variables;

Strings::separator('Variables');
$variables = new Variables();
$variables->run();

Strings::separator('Data Types');

$dataTypes = new DataTypes();
$dataTypes->run();

Strings::separator('Expressions');
$expression = new Expressions();
$expression->run();

Strings::separator('Operators');
$operatores = new Operators();
$operatores->run();

Strings::separator('Operator Precedence');
$operatorPrecedence = (new OperatorPrecedence())->run();

Strings::separator('Control Structure');
(new ControlStructures())->run();

Strings::separator('Loops');
$loops = new Loops();
$loops->run()->iterateVisible();

echo "<br />Running foreach in a object instance\n iterated through all of the visible properties that could be accessed.";
foreach ($loops as $key => $value) {
    echo "<br />";
    print "$key : $value";
}

require_once './bot_template.html';
