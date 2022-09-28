<?php

namespace Application\Generic;

use \SplStack;

class Stack
{
    protected SplStack $stack;

    public function __construct()
    {
        $this->stack = new SplStack();

    }
}
