<?php

namespace Core\orm\common;

class Connector
{

   private $dns;
   private $username;
   private $password;

   public function __construct()
   {
      $param = include_once (__DIR__) . '/../config/param.php';
      $host = $param['host'] ?? '';
      $dbname = $param['dbname'] ?? '';
      $this->dns = 'mysql:host=' . $host . ';dbname=' . $dbname;
      $this->username = $param['username'] ?? '';
      $this->password = $param['password'] ?? '';
   }

   public function connect()
   {
      return new \PDO($this->dns, $this->username, $this->password);
   }
}
