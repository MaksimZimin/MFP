<?php

namespace Core\orm;

use Core\orm\common\Connector;

class Insert extends Sql

{
//INSERT INTO table_name (column1, column2, column3, ...)
//VALUES (value1, value2, value3, ...);
    //private string $tableName;
    private array $column = [];
    private array $value = [];

        public function getColumn(): array
    {
        return $this->column;
    }

        public function setColumn(array $column): void
    {
        $this->column = $column;
    }

    public function getValue(): array
    {
        return $this->value;
    }

    public function setValue(array $value): void
    {
        $this->value = $value;
    }

    public function setSql(array $fields, array $values): string
    {
        $result = '';
        foreach ($values as $value)
        {
            if (empty($result)){
                $result = "'" . $value . "'";
            } else {
                $result .= ",'" . $value . "'";
            }
        }
        return 'INSERT INTO ' . $this->tableName . ' (' . implode(',', $fields) . ') VALUES (' . $result . ')';
    }

    public function execute()
    {
        $connect = new Connector();
        $PDO = $connect->connect();
        return $PDO->query($this->setSql($this->column, $this->value));
    }
}