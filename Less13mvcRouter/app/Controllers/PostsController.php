<?php

namespace App\Controllers;

use App\Models\ModelPosts;
use Core\View;

class PostsController implements ControllerInterface
{
    public function index()
    {
        $obj = new ModelPosts;
        $path = 'viewPosts';
        $date['people'] = $obj->getAll();
        View::generate($path, $date);
    }

    public function edit()
    {
        $result = array_filter($_POST);
        if (!empty($result));{
        $obj = new ModelPosts();
        $obj->createUser($result);
    }
        $path = 'user' . DIRECTORY_SEPARATOR . 'insertPosts';
        View::generate($path);
    }
}