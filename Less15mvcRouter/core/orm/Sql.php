<?php

namespace Core\orm;

use Core\orm\common\Connector;

class Sql
{
    protected Where $where;

    public function where($condition): void
    {
        $this->where = new Where;
        $this->where->setWhere($condition);
    }

    public string $tableName;

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function setTableName(string $tableName): void
    {
        $this->tableName = $tableName;
    }
}