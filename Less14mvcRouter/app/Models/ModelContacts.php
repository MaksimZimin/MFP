<?php

namespace App\Models;

use Core\orm\Insert;
use Core\orm\Select;

class ModelContacts
{
	public function getAll(): array
	{
		$select = new Select();
		$select->setTableName('contacts');
		$data = $select->execute();
		$rows = $data->fetchAll(\PDO::FETCH_ASSOC);
		return $rows;
	}

    public function createUser(array $data): void
    {
        $objInsert = new Insert();
        $objInsert->setColumn(array_keys($data));
        $objInsert->setValue(array_values($data));
        $objInsert->setTableName('contacts');
        $objInsert->execute();
    }
}
