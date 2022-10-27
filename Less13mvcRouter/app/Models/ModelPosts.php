<?php

namespace App\Models;

use Core\orm\Insert;
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


    public function createUser(array $data): void
    {
    $objInsert = new Insert();
    $objInsert->setColumn(array_keys($data));
    $objInsert->setValue(array_values($data));
    $objInsert->setTableName('posts');
    $objInsert->execute();
    }
}
