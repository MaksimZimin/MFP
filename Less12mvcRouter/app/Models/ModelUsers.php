<?php

namespace App\Models;

use Core\orm\Select;

class ModelUsers
{
	public function getAll(): array
	{
		$select = new Select();
		$select->setTableName('users');
		$data = $select->execute();
		$rows = $data->fetchAll(\PDO::FETCH_ASSOC);
		return $rows;
	}
}
