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
        return var_dump('i am admin\edit');
    }
}
