<?php

namespace App\Controllers;

use App\Models\ModelUsers;
use Core\View;

class AuthController implements ControllerInterface
{
    public function index()
    {
        $obj = new ModelUsers;
        $path = 'viewUsers';
        $date['people'] = $obj->getAll();
        View::generate($path, $date);
    }

    public function register()
    {
        $data = array_filter($_POST);

        if (!empty($data)) {
            $obj = new ModelUsers();
            $obj->createUser($data);
        }
        //View::generate('auth/register', $data);
        $path = 'auth' . DIRECTORY_SEPARATOR . 'insertRegister';
        View::generate($path);
    }

    public function login()
    {
        $data = array_filter($_POST);

        if (!empty($data)) {
            $obj = new ModelUsers();
            $result = $obj->auth($data['email'], $data['password']);
            var_dump($result);
        }
        $path = 'auth' . DIRECTORY_SEPARATOR . 'insertLogin';
        View::generate($path);
    }
}


