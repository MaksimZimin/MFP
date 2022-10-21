<?php

namespace App\Models;

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
}
