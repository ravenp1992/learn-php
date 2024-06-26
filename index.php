<?php

declare(strict_types=1);

require 'vendor/autoload.php';

require_once './top_template.html';

use App\DataTypes;
use App\Helpers\Strings;
use App\Variables;

Strings::separator('Variables');
$variables = new Variables();
$variables->run();

Strings::separator('Data Types');

$dataTypes = new DataTypes();
$dataTypes->run();

require_once './bot_template.html';
