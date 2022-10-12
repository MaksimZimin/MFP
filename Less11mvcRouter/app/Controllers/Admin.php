<?php
namespace App\Controllers;
use App\Models\Contacts;
use Core\View;

class Admin implements ControllerInterface
{
    public function index()
    {
        $obj = new Contacts;
        $path = 'view2';
        $date['people'] = $obj->getAll();
        View::generate($path, $date);
    }
    public function edit()
    {
        return var_dump('i am admin\edit');
    }
}
?>