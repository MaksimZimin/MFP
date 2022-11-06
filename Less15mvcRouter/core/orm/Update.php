<?php

namespace Core\orm;
use Core\orm\common\Connector;

class Update extends Sql
{
    protected $updName;
    protected $values;

    public function getUpdName()
    {
        return $this->updName;
    }

    public function setUpdName($updName): void
    {
        $this->updName = $updName;
    }

    public function getValues()
    {
        return $this->values;
    }

    public function setValues($values): void
    {
        $this->values = $values;
    }
    public function update(): string
    {
        $sql = 'UPDATE ' . $this->tableName .= ' SET ' . $this->updName . ' FROM ' . $this->values;
        if (!empty($this->where)) {
            $sql .= $this->where->getWhere();
        }
        return $sql;
    }
    public function execute ()
    {
        $connect = new Connector();
        $PDO = $connect->connect();
        return $PDO->query($this->update());
    }
}