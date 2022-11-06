<?php

namespace App\Models;

use Core\orm\Insert;
use Core\orm\Select;

class ModelUsers
{
	public function getAll(): array
	{
		$select = new Select();
		$select->setTableName('users');
		$data = $select->execute();
		return $data->fetchAll(\PDO::FETCH_ASSOC);
	}

    public function createUser(array $data): void
    {
        $objInsert = new Insert();
        $objInsert->setColumn(array_keys($data));
        $objInsert->setValue(array_values($data));
        $objInsert->setTableName('users');
        $objInsert->execute();
    }

    public function auth($email, $password): bool
    {
        $objSelect = new Select();
        $objSelect->where("email='" . $email . "' AND password = '" . $password . "'");
        $objSelect->setTableName('users');
        $data = $objSelect->execute();
        $result = $data->fetchAll(\PDO::FETCH_ASSOC);
        return !empty($result);
    }
}
