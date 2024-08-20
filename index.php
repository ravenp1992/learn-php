<?php

declare(strict_types=1);

require 'vendor/autoload.php';

require_once './top_template.html';

use App\Callables;
use App\Callbacks;
use App\ControlStructures;
use App\DataTypes;
use App\Expressions;
use App\Functions;
use App\Helpers\Strings;
use App\Loops;
use App\MatchExpression;
use App\OperatorPrecedence;
use App\Operators;
use App\SwitchStatement;
use App\Variables;

Strings::separator('Variables');
$variables = new Variables;
$variables->run();

Strings::separator('Data Types');

$dataTypes = new DataTypes;
$dataTypes->run();

Strings::separator('Expressions');
$expression = new Expressions;
$expression->run();

Strings::separator('Operators');
$operatores = new Operators;
$operatores->run();

Strings::separator('Operator Precedence');
$operatorPrecedence = (new OperatorPrecedence)->run();

Strings::separator('Control Structure');
(new ControlStructures)->run();

Strings::separator('Loops');
$loops = new Loops;
$loops->run()->iterateVisible();

echo "<br />Running foreach in a object instance\n iterated through all of the visible properties that could be accessed.";
foreach ($loops as $key => $value) {
    echo '<br />';
    echo "$key : $value";
}

Strings::separator('Switch Statement');
(new SwitchStatement)->run();

Strings::separator('Match Expression');
// (new MatchExpressions)->run();
(new MatchExpression)->run()->multiplePatterns()->exercise();

Strings::separator('Functions');
(new Functions)->run();

Strings::separator('Callables');
echo <<<'END'
Callable in PHP refers to any function, metthods, or class than can be invoked
as if it were a function. This includes standard functions, closures, object methods,
and static methods.<br/>
END;

// Regular function as callable
$regularFunc = function ($name) {
    return "Hello, $name!";
};

$callableResult = $regularFunc('John');
echo "<br /> $callableResult";

// Object methods as callable
$callableObj = new Callables;
$callableObjMethod = [$callableObj, 'sayHello'];
$callableResult = call_user_func($callableObjMethod, 'Raven');
echo "<br /> $callableResult";

// Static methods
$staticMethod = ['App\Callables', 'add'];
$callableResult = call_user_func($staticMethod, 5, 3);
echo "<br /> $callableResult";

Strings::separator('Callbacks');
echo <<<'END'
Callbacks refers to a mechanism that allows you to dynamically execute a function or method.
Additionally, callbacks are powerful tools for creating flexible and extensible code, enabling
you tto pass functions or methods as parameters to other functions, classes, or method. This
concept is closely tide to the idea of callable in PHP. <br/>
END;

// Reguar functiton as callback
// A callback can be a regular function, eithter builtt-in or user-defined.
// this is the simplest form of a callback, where a function is referenced by its name.
function myFunc(string $param): void
{
    echo "<br />Callback executed witth parameter: $param";
}
$callback = 'myFunc';
call_user_func($callback, 'Hello World');

// Anonymous Functions (Closures)
// Anonymous function, also known as closures, can be used as callbacks. These
// functions are defined on-the-fly without a specific name and are useful for
// short, one-off operations.
$callback = function (string $param): void {
    echo "<br />Callback executed with parameter: $param";
};
call_user_func($callback, 'Hello World!');

// Object methods
// Callbacks can reference methods within objects. This is particularly useful in
// an object-oriented context, allowing for dynamic execution of methods.
// $callback = new Callbacks();

echo '<br />'.get_class(new Callbacks);

$callback = [new Callbacks, 'run'];
call_user_func($callback, 'Hello World!!!');

// Functions Taking Callbacks
// Some PHP functions accepts callbacks as parameters, allowing you to customize their
// behavior dynamically.

// lets assume array of numbers
function my_array_map(callable $callback, array $arr): array
{
    $newArray = [];
    foreach ($arr as $data) {
        $newArray[] = call_user_func($callback, $data);
    }

    return $newArray;
}

$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = my_array_map(function ($n) {
    return $n * $n;
}, $numbers);

echo '<br />';
print_r($squaredNumbers);

require_once './bot_template.html';
