<?php

namespace App\Models;

use Core\Orm\Select;

class ModelPosts
{
	public function getAll(): array
	{
		$select = new Select();
		$select->setTableName('posts');
		$data = $select->execute();
		$rows = $data->fetchAll(\PDO::FETCH_ASSOC);
		return $rows;
	}
}
