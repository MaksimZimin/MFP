<?php

namespace App\Controllers;

use App\Models\ModelContacts;
use Core\View;

class ContactsController implements ControllerInterface
{
   public function index()
   {
      $obj = new ModelContacts;
      $path = 'viewContacts';
      $date['people'] = $obj->getAll();
      View::generate($path, $date);
   }

   public function edit()
   {
      return var_dump('i am home\edit');
   }
}
