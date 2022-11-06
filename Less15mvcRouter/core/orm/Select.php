<?php

namespace Core\orm;

use Core\orm\common\Connector;

class Select extends Sql
{
   protected $columns = '*';

   public function getColumns()
   {
      return $this->columns;
   }

   public function setColumns($columns): void
   {
      $this->columns = $columns;
   }

   public function getSQL(): string
   {
      $sql = 'SELECT ' . $this->columns . ' FROM ' . $this->tableName;
      if(!empty($this->where)) {
          $sql .= $this->where->getWhere();
      }
      return $sql;
   }

    public function execute()
    {
        $connect = new Connector();
        $PDO = $connect->connect();
        return $PDO->query($this->getSQL());
    }
}
