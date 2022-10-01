<?php

namespace Core;

class Router
{
    public $n = 'Hello World';

    public function run($n = null)
    {
        var_export($this->n);
    }
}

?>