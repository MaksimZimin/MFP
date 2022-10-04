<?php

namespace Core;
use App\controllers\Error404;


class Router
{
    public function setRouter($name)
    {
        $this->router = $name;
    }

    public function run()
    {
        $str = substr($_SERVER ["REQUEST_URI"],1);
        $exp = explode("/", $str);

            if (empty($exp[0])) {
                $className = 'Home';
            } else {
                $className = $exp[0];
            }

        $classPath = 'App\Controllers\\' . $className;
            if (class_exists($classPath)) {
                $obj = new $classPath;
            } else {
                $obj = new Error404;
            }
            $obj->index();
    }
}

?>
