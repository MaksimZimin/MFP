<?php

namespace App\Models;

class Contacts
{
	public function getAll(): array
	{
		return $arrPage = [
			'phone1' => '+38111',
			'phone2' => '+38222',
			'phone3' => '+38333',
			'phone4' => '+38444'
		];
	}
}
