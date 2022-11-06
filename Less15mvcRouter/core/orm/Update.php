<?php

namespace Core\orm;

use Core\orm\common\connector;

/*class Update extends Sql
{
    public function getSQL(): string
    {
        $sql = 'UPDATE FROM ' . $this->tableName;
        if(!empty($this->where)) {
            $sql .= $this->where->getWhere();
        }
        return $sql;
    }
}*/