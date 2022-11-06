<?php

namespace App\Controllers;

use App\Models\ModelUsers;
use Core\View;

class UsersController implements ControllerInterface
{
    public function index()
    {
        //var_dump($_SESSION['users']);
        $obj = new ModelUsers;
        $path = 'viewUsers';
        $date['people'] = $obj->getAll();
        View::generate($path, $date);
    }

    public function edit()
    {
        $result = array_filter($_POST);
        if (!empty($result));{
            $obj = new ModelUsers();
            $obj->createUser($result);
        }
        $path = 'user' . DIRECTORY_SEPARATOR . 'insertUsers';
        View::generate($path);
    }
}
