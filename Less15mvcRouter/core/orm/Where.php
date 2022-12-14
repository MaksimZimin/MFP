<?php

namespace Core\orm;

class Where
{
    protected $where = ' where ';

    public function getWhere(): string
    {
        return $this->where;
    }

    public function setWhere($where): void
    {
        if (is_array($where)) {
            foreach ($where as $key=>$value) {
                if (!empty($this->where)) {
                    $this->where = $key . '=' . $value;
                } else {
                    $this->where .= ' AND ' . $key . '=' . $value;
                }
            }
        } else {
            $this->where .= $where;
        }
    }
}