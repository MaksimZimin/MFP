<?php
namespace App\Controllers;
use App\Models\Name;
use Core\View;

class User implements ControllerInterface
{
    public function index()
    {
        $obj = new Name;
        $path = 'view3';
        $date['people'] = $obj->getAll();
        View::generate($path, $date);
    }
    public function edit()
    {
        return var_dump('i am admin\edit');
    }
}
?>