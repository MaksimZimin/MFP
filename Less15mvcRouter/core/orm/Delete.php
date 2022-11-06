<?php

namespace Core\orm;

use Core\orm\common\Connector;

class Delete extends Sql

{
    public function getSQL(): string
    {
        $sql = 'DELETE FROM ' . $this->tableName;
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