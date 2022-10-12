<?php

namespace App\Models;

class Pages
{
	public function getAll(): array
	{
		return $arrCont = [
			'pages1' => 'Car',
			'pages2' => 'Bike',
			'pages3' => 'Flat',
			'pages4' => 'Country house'
		];
	}
}
