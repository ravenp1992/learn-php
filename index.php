<?php

declare(strict_types=1);

require 'vendor/autoload.php';

require_once './top_template.html';

use App\ControlStructures;
use App\DataTypes;
use App\Expressions;
use App\Helpers\Strings;
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

require_once './bot_template.html';
