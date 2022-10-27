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
       $result = array_filter($_POST);
       if (!empty($result));{
       $obj = new ModelContacts();
       $obj->createUser($result);
   }
       $path = 'user' . DIRECTORY_SEPARATOR . 'insertContacts';
       View::generate($path);
   }
}
