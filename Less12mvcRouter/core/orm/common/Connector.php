<?php

namespace Core\orm\common;

class Connector
{

   private $dsn;
   private $username;
   private $password;

   public function __construct()
   {
      $param = include_once (__DIR__) . '/../config/param.php';
      $host = $param['host'] ?? '';
      $dbname = $param['dbname'] ?? '';
      $this->dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
      $this->username = $param['username'] ?? '';
      $this->password = $param['password'] ?? '';
   }

   public function connect()
   {
      return new \PDO($this->dsn, $this->username, $this->password);
   }
}
