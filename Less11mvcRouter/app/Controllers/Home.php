<?php

namespace App\Controllers;

use App\Models\Pages;
use Core\View;

class Home implements ControllerInterface
{
   public function index()
   {
      $obj = new Pages;
      $path = 'view1';
      $date['people'] = $obj->getAll();
      View::generate($path, $date);
   }

   public function edit()
   {
      return var_dump('i am home\edit');
   }
}
