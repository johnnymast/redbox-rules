<?php
require 'autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', true);

use Redbox\Rules\Rule;


/** @var \Redbox\Rules\Rule $instance */
$result = Rule::all([
    new \Redbox\Rules\Operators\EqualTo('')
])->then(function() {
    echo 'THen';
    return 'Return from then';
});


echo "Result: ".$result."\n";
