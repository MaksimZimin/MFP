<?php

namespace Core;

class Router_1
{
    public $n = 'Hello Max';

    public function setRun($r)
    {
        $this->n = $r;
    }
    public function getRun()
    {
        $r = var_export($this->n);
    }
}

?>
