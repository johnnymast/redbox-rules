<?php

namespace Redbox\Rules\Operators;


use Redbox\Rules\Context;

interface OperatorInterface {
    public function __construct(Context $context);
}