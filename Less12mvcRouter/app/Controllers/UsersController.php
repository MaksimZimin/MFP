<?php

namespace App\Controllers;

use App\Models\ModelUsers;
use Core\View;

class UsersController implements ControllerInterface
{
    public function index()
    {
        $obj = new ModelUsers;
        $path = 'viewUsers';
        $date['people'] = $obj->getAll();
        View::generate($path, $date);
    }

    public function edit()
    {
        return var_dump('i am admin\edit');
    }
}
